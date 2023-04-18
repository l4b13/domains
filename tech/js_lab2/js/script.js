// task1
const task1input1 = document.querySelector('#inputFirstExercise1')
const result1 = document.querySelector('#resultFirstExercise')

function getAge(arg1) {
    let x = parseInt(arg1, 10) + 1
    return x
}

task1input1.addEventListener("input", () => {
    result1.textContent = getAge(task1input1.value)
})

// task2
const task2input1 = document.querySelector('#inputSecondExercise1')
const task2input2 = document.querySelector('#inputSecondExercise2')
const result2 = document.querySelector('#resultSecondExercise')

function getRemainder(arg1, arg2) {
    let x = parseInt(arg1, 10)
    let y = parseInt(arg2, 10)
    return x % y
}

task2input1.addEventListener("input", () => {
    result2.textContent = getRemainder(task2input1.value, task2input2.value)
})

task2input2.addEventListener("input", () => {
    result2.textContent = getRemainder(task2input1.value, task2input2.value)
})

// task3
const task3input1 = document.querySelector('#inputThirdExercise1')
const result3 = document.querySelector('#resultThirdExercise')

function faceControl(arg1) {
    let x = parseInt(arg1, 10)
    if (x < 18) return "Отказ"
    return "Welcome"
}

task3input1.addEventListener("input", () => {
    result3.textContent = faceControl(task3input1.value)
})

// task4
const task4input1 = document.querySelector('#inputFourthExercise1')
const result4 = document.querySelector('#resultFourthExercise')

function getNextAge(arg1) {
    if (arg1 != "") {
        let x = parseInt(arg1, 10) + 1
        return x
    }
    return "0"
}

task4input1.addEventListener("input", () => {
    result4.textContent = getNextAge(task4input1.value)
})

// task5
const task5input1 = document.querySelector('#inputFifthExercise1')
const result5 = document.querySelector('#resultFifthExercise')

function canRide(arg1) {
    let x = parseInt(arg1, 10)
    if (x < 140) return false
    return true
}

task5input1.addEventListener("input", () => {
    result5.textContent = canRide(task5input1.value)
})