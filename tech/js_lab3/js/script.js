// task1
const input1 = document.querySelector('#inputTask1')
const result1 = document.querySelector('#resultTask1')

function sumArray(args) {
    let sum = 0
    args.forEach(num => {
        sum += num
    })
    return sum
}

array1 = [1, 2, 3, 4]
input1.textContent = array1
result1.textContent = sumArray(array1)

// task2
const input2 = document.querySelector('#inputTask2')
const result2 = document.querySelector('#resultTask2')

function getAboveZero(args) {
    return args.filter(function(num){
        return num > 0
    })
}

array2 = [1, 2, 3, 4, -5, -2, 7]
input2.textContent = array2
result2.textContent = getAboveZero(array2)

// task3
const input3 = document.querySelector('#inputTask3')
const input3_1 = document.querySelector('#inputTask3_1')
const result3 = document.querySelector('#resultTask3')

function getPonies(args, target) {
    let ans = args.find(function(pony){
        if (pony == target) return pony
    })
    if (!ans) return 'false'
    else return ans
}

array3 = ['TwilightSparkle', 'RainbowDash', 'AppleJack', 'Rarity', 'Pinkie Pie', 'Fluttershy']
let target3 = 'AppleJack'
input3.textContent = array3
input3_1.textContent = target3
result3.textContent = getPonies(array3, target3)

// task4
const input4 = document.querySelector('#inputTask4')
const input4_1 = document.querySelector('#inputTask4_1')
const result4 = document.querySelector('#resultTask4')

function isTxIncluded(args, target) {
    return args.includes(target)
}

array4 = ['0xaea0', '0x8f80', '0xf3ad', '0x17ec']
let target = '0x9e0a'
input4.textContent = array4
input4_1.textContent = target
result4.textContent = isTxIncluded(array4, target)

// task5
const input5 = document.querySelector('#inputTask5')
const result5 = document.querySelector('#resultTask5')

function getSizes(args) {
    return args.map(function(word){
        return word.length
    })
}

array5 = ['Hello','world','!']
input5.textContent = array5
result5.textContent = getSizes(array5)

// task6
const input6 = document.querySelector('#inputTask6')
const result6 = document.querySelector('#resultTask6')

function getWithSpaces(args) {
    ans = []
    let temp = args.join(" ")
    ans.push(temp)
    ans.push(temp.length)
    return ans
}

array6 = ['Hello','world','!']
input6.textContent = array6
result6.textContent = getWithSpaces(array6)

// task7
const result7 = document.querySelector('#resultTask7')
result7.textContent = 'нет условия'

// task8
const input8 = document.querySelector('#inputTask8')
const result8 = document.querySelector('#resultTask8')

function getEpisodes(arg) {
    return "Аниме " + arg.title + " включает " + arg.episodes + " серий"
}

const anime8 = {
    title: "Naruto",
    episodes: 220
}
input8.textContent = anime8.title
result8.textContent = getEpisodes(anime8)

// task9
const input9 = document.querySelector('#inputTask9')
const result9 = document.querySelector('#resultTask9')

const triple = (arg) => {
    return arg*3
}

number9 = 4
input9.textContent = number9
result9.textContent = triple(number9)

// task8
const input10 = document.querySelector('#inputTask10')
const result10 = document.querySelector('#resultTask10')

const getAvgGlucose = (args) => {
    return sumArray(args)/args.length
}

array10 = [1.2, 2.4, 6.0, 5.1]
input10.textContent = array10
result10.textContent = getAvgGlucose(array10)