<?php
/**
 * Created by PhpStorm.
 * User: kazut
 * Date: 28/01/17
 * Time: 02:08
 */

namespace AppBundle;


class ImageExport
{
    private $timetable;

    private const COLUMN_WIDTH = 100;
    private const ROW_HEIGHT = 14;
    private const ROW_RESOLUTION = 15; // minutes
    private const HEADER_HEIGHT = 19;
    private const MARGIN_WIDTH = 55;
    private const MARGIN_TIME_DELTA = 30; // minutes

    private const FONT= __DIR__ . '/../../app/Resources/DejaVuSans.ttf';
    private const MARGIN_FONT_SIZE = 10;
    private const HEADER_FONT_SIZE = 12;
    private const CLASS_FONT_SIZE = 12;
    private const LECTULER_FONT_SIZE = 12;
    private const SUBJECT_FONT_SIZE = 12;

    private const CLASS_OFFSET = 0;
    private const LECTULER_OFFSET = 15;
    private const SUBJECT_OFFSET = 30;

    private $backgroundColor;
    private $marginColor;
    private $headerColor;
    private $rowLineColor;
    private $blockRectColor;
    private $blockClassColor;
    private $blockLecturerColor;
    private $blockSubjectColor;

    public function __construct($timetable)
    {
        $this->timetable = $timetable;
    }

    private function initColors($img)
    {
        $this->backgroundColor = imagecolorallocate($img, 255, 255, 255);
        $this->marginColor = imagecolorallocate($img, 150, 100, 125);
        $this->rowLineColor = imagecolorallocate($img, 225, 225, 225);
        $this->blockRectColor = imagecolorallocate($img, 180, 180, 90);
        $this->blockClassColor = imagecolorallocate($img, 60, 60, 30);
        $this->blockLecturerColor = imagecolorallocate($img, 90, 90, 40);
        $this->blockSubjectColor = imagecolorallocate($img, 0, 0, 0);
        imagefill($img, 0, 0, $this->backgroundColor);
    }

    private function timeDiffInMinutes(\DateTime $a, \DateTime $b)
    {
        $diff = $a->diff($b);
        return (int)$diff->format('%h') * 60 + (int)$diff->format("%i");
    }

    private function drawGrid($img, $img_width, $num_rows) {
        for ($i = 0; $i < $num_rows; $i++) {
            $y = $i * self::ROW_HEIGHT + self::HEADER_HEIGHT;
            imageline($img, 0, $y, $img_width, $y, $this->rowLineColor);
        }
    }

    public function generate() {
        $min_start = PHP_INT_MAX;
        $max_end = PHP_INT_MIN;

        foreach ($this->timetable as $day) {
            foreach ($day['blocks'] as $block) {
                $min_start = min($min_start, $block['start']);
                $max_end = max($max_end, $block['end']);
            }
        }


        $minmax_diff = $this->timeDiffInMinutes($min_start, $max_end);
        $num_rows =  $minmax_diff / self::ROW_RESOLUTION;

        $img_width = count($this->timetable) * self::COLUMN_WIDTH + self::MARGIN_WIDTH;
        $img_height = $num_rows * self::ROW_HEIGHT + self::HEADER_HEIGHT;

        $img = imagecreatetruecolor($img_width, $img_height);

        $this->initColors($img);
        $this->drawGrid($img, $img_width, $num_rows);
        $this->drawMargin($img, $min_start, $minmax_diff);
        $this->drawColumns($img, $min_start);

        return $img;
    }


    private function drawBlock($img, $block, $min_start, $xStart, $rectColor)
    {
        $diffFromStart = $this->timeDiffInMinutes($block['start'], $min_start);
        $xEnd = $xStart + self::COLUMN_WIDTH;

        $yStart = $diffFromStart / self::ROW_RESOLUTION * self::ROW_HEIGHT + self::HEADER_HEIGHT;
        $blockLength = $this->timeDiffInMinutes($block['start'], $block['end']) / self::ROW_RESOLUTION * self::ROW_HEIGHT;
        $yEnd = $yStart + $blockLength;

        imagefilledrectangle($img, $xStart + 1, $yStart + 1, $xEnd - 1, $yEnd - 1, $rectColor);
        imagefttext(
            $img,
            self::CLASS_FONT_SIZE,
            0,
            $xStart + 5,
            $yStart + 5 + self::CLASS_FONT_SIZE + self::CLASS_OFFSET,
            $this->blockClassColor,
            self::FONT,
            $block['class']
        );
        imagefttext(
            $img,
            self::LECTULER_FONT_SIZE,
            0,
            $xStart + 5,
            $yStart + 5 + self::LECTULER_FONT_SIZE + self::LECTULER_OFFSET,
            $this->blockLecturerColor,
            self::FONT,
            $block['lecturer']
        );
        imagefttext(
            $img,
            self::SUBJECT_FONT_SIZE,
            0,
            $xStart + 5,
            $yStart + 5 + self::SUBJECT_FONT_SIZE + self::SUBJECT_OFFSET,
            $this->blockSubjectColor,
            self::FONT,
            $block['subject']
        );
    }

    private function printHeaderColumn($img, $x, $day)
    {
        imagefttext(
            $img,
            self::HEADER_FONT_SIZE,
            0,
            $x + 5,
            self::HEADER_FONT_SIZE + 5,
            $this->headerColor,
            self::FONT,
            $day['date']->format('d.m')
        );
    }

    private function drawMargin($img, $min_start, $minmax_diff)
    {
        $rightSideTimes = $minmax_diff / self::MARGIN_TIME_DELTA;
        foreach (range(0, $rightSideTimes) as $time_multi) {
            /** @var \DateTime $start_time */
            $start_time = clone $min_start;
            $interval = new \DateInterval('PT' . self::MARGIN_TIME_DELTA * $time_multi . 'M');
            $time = $start_time->add($interval)->format('H:i');

            $yPos = $time_multi * self::ROW_HEIGHT * self::MARGIN_TIME_DELTA / self::ROW_RESOLUTION + self::HEADER_HEIGHT - 2;
            imagefttext($img, self::MARGIN_FONT_SIZE, 0, 0, $yPos, $this->marginColor, self::FONT, $time);
        }
    }

    /**
     * @param $img
     * @param $start_time
     */
    private function drawColumns($img, $start_time): void
    {
        $colNum = 0;
        foreach ($this->timetable as $day) {
            $xStart = $colNum * self::COLUMN_WIDTH + self::MARGIN_WIDTH;

            $this->printHeaderColumn($img, $xStart, $day);

            foreach ($day['blocks'] as $block) {
                $this->drawBlock($img, $block, $start_time, $xStart, $this->blockRectColor);
            }
            $colNum++;
        }
    }
}