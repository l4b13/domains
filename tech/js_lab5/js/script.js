// Задание 1
console.log("Задание 1");
const etherium = {
  usd: 2811,
  rub: 200612,
  eur: 2666
};
const getRate = (crypto, currency) => crypto[currency];
console.log(getRate(etherium, "usd"));

// Задание 2
console.log("Задание 2");
const getValues = obj => Object.values(obj).map(val => val.toUpperCase());
console.log(getValues({lang: "JavaScript", course: "thirD"}));

// Задание 3
console.log("Задание 3");
const getInfo = (street, building, flat) => {
  return {street, building, flat};
};
console.log(getInfo("Lenina", 1, 40));

// Задание 4
console.log("Задание 4");
const joinArrays = (obj1, obj2) => {return {...obj1, ...obj2}};
console.log(joinArrays({who: "monke", isfunny: true},{who: "John", actor: "Keanu"}));

// Задание 5
console.log("Задание 5");
class User {
  constructor(name, email) {
    this.name = name;
    this.email = email;
  }
}
const createUser = (name, email) => new User(name, email);
console.log(createUser("Vladislav", "l4b13twink@gmail.com"));

// Задание 6
console.log("Задание 6");
class User1 {
  constructor(id, st) {
    this.id = id;
    this.st = st;
  }
  getId() {
    return `#${this.id}`;
  }
  isAdmin() {
    return this.st.toLowerCase() == "admin" ? true : false;
  }
};
const user1 = new User1(100, "Admin");
console.log(user1.getId());
console.log(user1.isAdmin());
const user2 = new User1(217, "SimpleUser");
console.log(user2.getId());
console.log(user2.isAdmin());

// Задание 7
console.log("Задание 7");
class AreaOfCircle {
  constructor(radius) {
    this.radius = radius;
    this.area = radius * radius * 3.1415296;
  }
  get radius() {
    return this._area;  
  }
  set radius(radius) {
    this._radius = radius;
    this._area = radius * radius * 3.1415296;
  }
};
const area = new AreaOfCircle(2);
console.log(area.radius);
area.radius = 10;
console.log(area.radius);

// Задание 8
console.log("Задание 8");
class Course {
  constructor(mark) {
    this.mark = mark;
  }
  set mark(mark) {
    this._mark = mark;
  }
  getGrade() {
    return this._mark > 3 ? true : false;
  }
  getCertificate() {
    return this.getGrade() ? "Выдать сертификат" : "Курс не пройден";
  }
};
const course = new Course(5);
console.log(course.getCertificate());
course.mark = 3;
console.log(course.getCertificate());