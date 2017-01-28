function Group (id) {
    this.id = id // Number
}

function Professor (name, courses) {
    this.name = name // String
    this.courses = courses // [String]
}

function Room (id) {
    this.id = id // Number
}

function Course (name) {
    this.name = name // String
}

function Schedule (id, classroom, lesson, group, lecturer, timeStart, timeEnd) {
    this.id = id
    this.classroom = classroom
    this.lesson = lesson
    this.group = group
    this.lecturer = lecturer
    this.timeStart = timeStart
    this.timeEnd = timeEnd
}

/*
 console.log(new Group)
 console.log(new Professor)
 console.log(new Room)
 console.log(new Course)
 */

const courseNames = ['Matematyka', 'Plastyka', 'Przyroda', 'WF', 'Analiza Matematyczna', 'Inżynieria Oprogramowania']

const courses = courseNames.map((name) => new Course(name))
const professors = [...Array(10)].map((v, i) => new Professor(faker.name.findName(), courses[i % (courses.length - 1)]))
const rooms = [...Array(10)].map((v, i) => new Room(i))
const groups = [...Array(3)].map((v, i) => new Group(i))


console.log(groups, courses, professors, rooms)


const scheduleProfessors = [...Array(5)].map((u, j) => [...Array(12)].map((u, i) => {
    const room = rooms.find((r) => !!r) // Dodać preferencje
const course = courses.find((c) => !!c)
const group = groups[j*i % (groups.length - 1)]
return new Schedule(i, room, course, group, professors[j*i % (professors.length - 1)], i, i+1)
}))

console.log(scheduleProfessors)

