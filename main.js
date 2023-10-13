'use strict'

function checkUser() {
    let login = document.getElementById("1").value 
    }

function kvkb() {
    let chslo = document.getElementById("3").value
    document.getElementById("text1").innerText = `${chslo}^2 = ${chslo*chslo}; ${chslo}^3 = ${chslo*chslo*chslo}`
}

function nigcht(){
    let obj = document.getElementById("col")
    let color = obj.value
    document.getElementById("pan").style.background= color;
    document.getElementById("registr").style.background= color;
    document.getElementById("poiskovik").style.background= color;
}

function mas(){
    // let arr = [];
    // let fruits = ['яблоко', 'банан', 'апельсин']
    // alert("1) " + fruits.length + " 2) " + fruits.at(-1) + " 3) " + fruits.pop() + " 4) " + fruits.push("арбуз") + " 5) " + fruits)
    let matr =[[1,2,3],
               [4,5,6],
               [7,8,9]];
    for (let i = 0; i < matr.length; i++) {
        let matrlen = matr[i].length;
        for(let j = 0; j < matrlen; j++){
            alert(matr[i][j])
        }
    }
}

let matr =[[1,2,3],
           [4,5,6],
           [7,8,9]];
function masclik(){
    //1
    for (let i = 0; i < matr.length; i++) {
        let matrlen = matr[i].length;
        alert("1) " + matrlen)
    }
    //2.1
    let multi = []
    for (let i = 0; i < matr.length; i++) {
        let matrlen = matr[i].length;
        for(let j = 0; j < matrlen; j++){
            if (i = j){
                multi.push(matr[i][j])
            }
        }
    }
    let m = 1
    for (let n = 0; n < multi.length; n++) {
    m = m * multi[n]
    }
    alert(m)
    //2.2
    let multim= []
    let j = 3
    for (let i = 0; i < matr.length; i++) {
        let matrlen = matr[i].length
        j = j - 1
        multim.push(matr[i][j])
    }
    alert(multim)
    let s = 1
    for (let n = 0; n < multim.length; n++) {
        s = s * multim[n]
    }
    alert(s)
    //3
    let v = []
    for (let i = 0; i < matr.length; i++) {
        let matrlen = matr[i].length;
        for(let j = 0; j < matrlen; j++){
            v.push(matr[i][j])
        }
    }
    let str = v.join("; ")
    alert(str)
    //4
    let f = []
    for (let j = 0; j < matr.length; j++) {
        let i = 0 
        f.push(matr[i][j])
    }
    let ss = 1
    for (let n = 0; n < f.length; n++) {
        ss = ss * f[n]
    }
    alert(ss)
    //5
    let d = []
    for (let i = 0; i < matr.length; i++) {
        let j = 0
        d.push(matr[i][j])
    }
    let sss = 1
    for (let n = 0; n < d.length; n++) {
        sss = sss * d[n]
    }
    alert(sss)

    let lst =[1,2,3]
    let res = lst.pop()
    alert(res)

    lst.splice(1,1)
    alert(lst)
}

let masiv=[1,2,3,4,5,6,7,8,9,10]
function multi(){
    let newmasiv = []
    for (let i = 0; i < masiv.length; i++) {
        newmasiv.push(masiv[i] * masiv.reverse()[i])
    }
    alert(newmasiv)
}

let arr = ["1","Иван","4","Петя"]
function poisk(){
    let p = document.getElementById("poisk").value
    let i = arr.includes(p)
    if (i == true){
        alert("Найденно!")
    } else{
        alert("Не найденно:(")
    }
}

let ar = ['Петя','Вася','Жора']
let ar2 = ['Аня','Катя','Инна']
let po = ['Катя', 'Евгений']
function pr(){
    let A = ar.concat(ar2)
    alert(A)
    for (let i = 0; i < po.length; i++) {
        let n = A.includes(po[i])
        if (n == true){
            alert("Найден/а: " + A[i])
        }
    } 
    //добавить
    let k = A.indexOf("Петя")
    A.splice(k+1,0,"Георгий")
    alert(A)
    //удалить
    let b = A.indexOf("Вася")
    let u = A.indexOf("Инна")
    A.splice(b,1)
    A.splice(u,1)
    alert(A)
}

let k = 0
function rgb(){
    let col= ["red","blue","green","white"]
    if(k == 0){
        document.getElementById("cl").style.background = col[k];
    } else if( k == 1){
        document.getElementById("cl").style.background = col[k];
    } else if( k == 2){
        document.getElementById("cl").style.background = col[k];
    } else{
        document.getElementById("cl").style.background = col[k];
        k = -1 
    }
    k = k+1
}
// document.getElementById("pan").style.fontSize = "17px"
let size = document.getElementById("pan").style.fontSize 
let p = 17
function sizeb(){
    p = p + 1
    document.getElementById("pan").style.fontSize = `${p}px`;

}

function sizem(){
    p = p - 1
    document.getElementById("pan").style.fontSize = `${p}px`
}

function def(){
    document.getElementById("pan").style.fontSize = size
}

let color_schemg = {color: "grey", fontSize: "13px"}
let color_schemr = {color: "red", fontSize: "16px"}
let color_schemb = {color: "blue", fontSize: "19px"}
let standart = {color: "white", fontSize: "17px"}
document.getElementById("ss1").style.background = color_schemg.color 
document.getElementById("ss2").style.background = color_schemr.color 
document.getElementById("ss3").style.background = color_schemb.color 


function stylesg(){
    document.getElementById("pan").style.fontSize =color_schemg.fontSize
    document.getElementById("pan").style.background =color_schemg.color
}
function stylesr(){
    document.getElementById("pan").style.fontSize =color_schemr.fontSize
    document.getElementById("pan").style.background =color_schemr.color
}
function stylesb(){
    document.getElementById("pan").style.fontSize =color_schemb.fontSize
    document.getElementById("pan").style.background =color_schemb.color
}
function standarts(){
    document.getElementById("pan").style.fontSize = standart.fontSize
    document.getElementById("pan").style.background =standart.color
}

let B = [-1, 2, 5, -6, 0, 7, "Иван", "Марья"]
let b = []
function otv(){
    for(let i = 0; i< B.length; i++){
        if(B[i] > 0){
            b.push(B[i])
        }
    }
    return b
}

function ran(){
    let randomNamber = Math.floor(Math.random() * 101)
    alert(randomNamber)
}

function sm(){
    let k = 1
    for (let i = 2; i < 101; i++) {
        k = k + (1/i)
    }
    alert(k)

}
function sp(){
    alert("Вы зарегестрированы!")
}

function OP(pas, nam){
    alert(pas)
    alert(nam)
}

function opas(){
    let op = document.getElementById("opas")
    let op_ch = op.value
    document.getElementById("pan").style.opacity= op_ch;
    document.getElementById("poiskovik").style.opacity= op_ch;
}

function ops_2(){
    let op = document.getElementById("opas")
    let op_ch = op.value
    document.getElementById("poiskovik").style.opacity= op_ch;
    document.getElementById("pan").style.opacity= op_ch;
    
}

function cs(){
    let namber = prompt('Какой браузер лучше?')
    if(namber == "Chrom"){
        alert("Самый лучший браузер")
    }else if(namber == "FireFox" || namber == "Safari"){
        alert("Неплохо")
    }else{
        alert("Пойдет")
    }
}
function mb(){
    let A = prompt('Введите числа А')
    let B = prompt('Введите число B')

    if (A<B){
        alert("Меньше B: " + B)
    }else if(B<A){
        alert("Меньше A: " + A)
    }else{
        alert("Они равны")
    }
}

function mb(){
    let A = +prompt('Введите числo: ')
    let k = A

    if (A<0){
        alert("Введте положительное число: ")
    }else if(A>0){
        let S = +prompt('Введите степень (от -10 до 10) для возведения: ')
        if (S<11 && S>0 ){
            for(let i = 0; i < S-1; i++){
                k = k * A
            }
            alert("Ответ: " + k)
        }else if(S>-11){
            for(let i = 0; i < S-1; i++){
                k = k * A
            }
            k = 1/k
            alert("Ответ: " + k)
        }else{
            alert("Введите другую степень")
        }
    }else{
        alert("это не число")
    }
}

function hd(){
    document.getElementById("option").hidden = false;
    document.getElementById("pan_infos").hidden = false;
    document.getElementById("info_user").hidden = false;
    document.getElementById("infos").hidden = true;
    alert("Вам доступные новые функции")
}

// let ctepen = document.getElementById("stepen").value
// let cheslo = document.getElementById("cheslo").value

function rk(cheslo, ctepen){
    if(ctepen != 1){
        return(cheslo * rk(cheslo, ctepen - 1))
    }else if(ctepen == 1){
        return(cheslo)
    }
}
function rk_out(){
    let ctepen = document.getElementById("stepen").value
    let cheslo = document.getElementById("cheslo").value

    let s = parseInt(ctepen)
    let c = parseInt(cheslo)

    alert(rk(c, s))
}
// let namber = prompt('Введите число от 0 до 3')
// switch (namber){
//     case '0':
//         alert("Вы ввели 0")
//         break
//     case '1':
//         alert("Вы ввели 1")
//         break
//     case '2':
//         alert("Вы ввели 2")
//         break
//     case '3':
//         alert("Вы ввели 3")
//         break    
//     default:
//         alert("Попробуй другое")
// }

// switch (namber){
//     case 'FireFox':
//     case 'Safari':
//         alert("Согласен")
//         break;
//     default:
//         alert("Пойдет!")
// }
// }


// document.getElementById("otv").innerText = "Ответ: " + otv()

// let vide ={
//     get fullName(){
        
//     },
//     set fullName(fn){
//         this.fullName = fn
//     }

// }

// //1
// document.write("1) ")
// let sum = 5 + 6
// document.write(sum)
// document.write("<br>")
// //2
// document.write("2) ")
// let nam = prompt('Как вас зовут?')
// let concat = "Привет, " + nam
// document.write(concat)
// document.write("<br>")
// //3
// document.write("3) ")
// let div = nam/sum
// document.write(div)
// document.write("<br>")
// //4
// document.write("4) ")
// let isNum = isNaN(div)
// document.write(isNum)
// document.write("<br>")
// //5
// document.write("5) ")
// let isPositive = sum > 0
// document.write(isPositive)
// document.write("<br>")