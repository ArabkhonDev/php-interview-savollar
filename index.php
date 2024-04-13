

<?php

/* data types
    1. integer
    2. float
    3. string
    4. null
    5. undefined
    6. boolean

    7. array
    8. Nan
    9. resource

*/

/*  
<?= 'salom' ?> 
o'zgaruvchi turlari

    a) global ozgaruvchilar
        $name, global $name
        1) buni funksiya ichida ishlatish uchun, global kalit sozi orqali ishlatish mumkin
        2) funksiyaga parametr orqali berib xam funksiya ichida ishlatsa boladi

    b) static va local ozgaruvchilar
        1)funksiya ichida ishlatilinadigan ozgaruvchilar xammasi local ozgaruvchilardir


        $name = 'Abdulloh';
        
        function getName(){
            global $name;
            echo $name . ' qalesan ';
            static $lname = 'Abdumajidov';
        }
        getName();
        function AddName($name){
            echo $name;
        }
        AddName($name);
*/
/* property va variable

    propertylar classdagi qiymatlar, 
    variable esa function va globaldagi qiymatlar

*/
/* cookie va session farqi
    cookie bu foydalanuvchi browserdagi saqlanadigan malumot
    session bu foydalanuvchining serverdagi saqlanadigan malumot

*/ 
/* O ning data turi qaysi
    integer
    var_dump(0);

*/
/* "" bilan '' farqi 
    $name varibale ni "" bunda qiymat olib ishlaydi,
    '' buni ichida yozilsa misol '$name' buni qiymati yoq va oddiy string qaytaradi
*/
/* final class BigInt{
    final public function number(){
        return "number";
    }
} 
*/

/* Composer nima

    dasturimizga kerakli package yoki file yuklash uchun kerak boladigan programma

*/

/* mysql dan savollar
    char va varchar o'xshashlik va  farqi
        1) varchar va charda 0dan 255gacha qiymat berish mumkin
        2) charda 10 qiymat berilsa va uni ichiga 4byte  maumot kirgizilsa xam 10byte xotiradan joy saqlaydi 
        3) varcharda esa berilgan qiymatdan kam boladigan bolsa kirgizilgan qiymat boyicha xotiradan joy saqlaydi


        
        mysqlda agregat funksiyalar

    count, max, min, summ

    truncate va delete farqi
    agar tablelardan foreign key boladigan bolsa, delete qilinganda muoomo boladi va ochiq ketmaydi
        truncate bolsa ochirib yuboradi, foreign keyga etibor xam bermaydi

        delete da index ozgaradi 
        truncateda esa index va xammasi ochib ketadi
        
        
        mysql va sql farqi nima?
        protcedura va fuksiya farqi?


        
        
*/
   

/* Git savollar

    Git pull va git fetch farqi
    1) git pull togridan-togri ozgarishlarni saqlab qoladi, conflict yuzaga kelsa yani togri tushi xatolik qilmasa merge qiladi
    2) git fetch serverdagi malumotlarni oladi lekin boshqa malumotlarni asinxronga olib, stage ga olib qoyadi
    
    Git fork bu boshqa repozitorydan copy qilib olish.
    1) xoxlagancha ozgartirish mumkin,
    2) agar bazi joylarida ozgartirish koproq bolib yangilik qoshilsa, oldingi repozitory ga <=> git pull request <=> qilsa boladi, qabul qilsa merge boladi conflict bolmasa.

    Git revert nima?
    1) oxirgi orgarishlarni qaytarib qoyadi yani ozgartirilgan fayllarni qaytaradi

*/

/* programming language turlari

    2xil boladi. interpredator ba compiler
    php interpredator turiga kiradi.

    interpredator compilit bolish tez, lekin ishlashi sekin, debug qilish oson, 
    compiler compilit bolisb sekin, lekin ishlashi tez, debug qilish ozgina qiyinroq yani compiled bolgandan keyin debug qilinadi

*/ 