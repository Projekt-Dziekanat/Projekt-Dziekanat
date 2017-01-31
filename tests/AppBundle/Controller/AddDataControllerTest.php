<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use AppBundle\Entity\AddClass;
use AppBundle\Entity\AddLecturer;
use AppBundle\Entity\AddSubject;

use Symfony\Component\Validator\ValidatorFactory;

class DefaultControllerTest extends WebTestCase
{
	
	public function classProvider()
    {
        return [
            ['aaa', 'bbb', 0],
            ['aaa', 'bbb', 1],
            ['Test Testg', 'Test test', 1],
        ];
    }
	
	/**
     * @dataProvider classProvider
     */
	public function testgetterSetterClass($name,$number,$isAvailable){
		
		$addClass= new AddClass();

        
        $addClass->setName($name);
        $addClass->setNumber($number);
        $addClass->setIsActive(1);
        $addClass->setIsAvailable($isAvailable);
		
		$this->assertEquals($addClass->getName(), $name);
		$this->assertEquals($addClass->getNumber(), $number);
		$this->assertEquals($addClass->getIsActive(), 1);
		$this->assertEquals($addClass->getIsAvailable(), $isAvailable);

	}
	
	public function lecturerProvider()
    {
        return [
            ['Adam', 'Malysz', 'Master'],
            ['Adam', 'Malysz', 'Engineer'],
            ['Adam', 'Malysz', 'Doctor'],
			['Piotr', 'Kowalski', 'Master'],
            ['Piotr', 'Kowalski', 'Engineer'],
            ['Piotr', 'Kowalski', 'Doctor'],
        ];
    }
	
	/**
     * @dataProvider lecturerProvider
     */
	public function testgetSeteLecturer($fistName, $lastName, $degree){
		
		    $addLecturer= new AddLecturer();

            $addLecturer->setfirstName($fistName);
            $addLecturer->setLastName($lastName);
            $addLecturer->setDegree($degree);
            $addLecturer->setIsActive(1);
			
			$this->assertEquals($addLecturer->getfirstName(), $fistName);
			$this->assertEquals($addLecturer->getLastName(), $lastName);
			$this->assertEquals($addLecturer->getIsActive(), 1);
			$this->assertEquals($addLecturer->getDegree(), $degree);

			
	}
	
	
	public function subjectProvider()
    {
        return [
            ['Programowanie'],
            ['Angielski'],
            ['Matematyka'],
        ];
    }
	
	/**
     * @dataProvider subjectProvider
     */
	public function testgetsetSubject($name){
		$addSubject= new AddSubject();
		$addSubject->setName($name);
		
		$this->assertEquals($addSubject->getName(), $name);
		
	}
	
	/*
	public function objectProvider()
    {
        $objects = [];
		
		$addClass= new AddClass();
		$addLecturer= new AddLecturer();
		
		$objects[] = [clone($addClass), 2];
		$objects[] = [clone($addLecturer), 2];
		$objects[] = [new AddSubject(), 1];
		
		$placeHolder = 'Master';
		
		$addClass->setName($placeHolder);
		$addLecturer->setfirstName($placeHolder);
		
		$objects[] = [clone($addClass), 1];
		$objects[] = [clone($addLecturer), 1];
		
		
		$addClass->setNumber($placeHolder);
		$addLecturer->setLastName($placeHolder);
		$addLecturer->setDegree($placeHolder);
		
		$objects[] = [clone($addClass), 1];
		$objects[] = [clone($addLecturer), 1];

       return $objects;
    }
	*/
	
	
	/**
     * @dataProvider objectProvider
     *
	 
	public function testValidator($entity, $errorsAount){
		$validator = ValidatorFactory::buildDefault()->getValidator();
		$errors = $validator->validate($entity);
		
		//$this->assertEquals(0, count($errors));
		
		$this->assertGreaterThanOrEqual($errorsAount, count($errors));
		
	}
	
	*/
	
}
