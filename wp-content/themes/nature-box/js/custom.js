// Большое меню
$(document).ready(function(){

var i = 1;
$('.tab-pane-fs').each(function() {
  $(this).attr('id', 'S_' + i);
  i++;
});

});

$(document).ready(function(){

$("#S_1").addClass("active");

});

// Выпадающее подменю

// Вид карточки товара

$(document).ready(function(){

$("#topmenu-2 li").next(".sub-menu").hide();



$("#topmenu-2 li").mouseenter(
      function () {
        $(this).find("ul").show();
      }
);

$("#topmenu-2 li").mouseleave(
      function () {
        $(this).find("ul").hide();
      }
);

$(".sub-menu").mouseenter().hide();

});

// Слайдер в центре внимания

$(document).ready(function(){

  $("#slider-pult-next").click(
     function(){$("#slider-pult .active").next().click();}
  );

$("#slider-pult-prev").click(
     function(){$("#slider-pult .active").prev().click();}
  );

});

// Меню категорий


function izmen(){
chto=document.getElementById("master1").value;
if(chto==1){
document.calcForm.del2.options.length=0;
document.calcForm.del2.options[0]=new Option("---", "0", true, false);
document.calcForm.del2.options[1]=new Option("Живая природа", "1", false, false);
}
if(chto==2){
document.calcForm.del2.options.length=0;
document.calcForm.del2.options[0]=new Option("---", "0", true, false);
document.calcForm.del2.options[1]=new Option("Не живая природа", "2", false, false);
}
if(chto==3){
document.calcForm.master2.options.length=0;
document.calcForm.master2.options[0]=new Option("---", "0", true, false);
document.calcForm.master2.options[1]=new Option("Белая", "100", false, false);
}
if(chto==4){
document.calcForm.master2.options.length=0;
document.calcForm.master2.options[0]=new Option("---", "0", true, false);
document.calcForm.master2.options[1]=new Option("Белая", "100", false, false);
}
if(chto==5){
document.calcForm.master2.options.length=0;
document.calcForm.master2.options[0]=new Option("---", "0", true, false);
document.calcForm.master2.options[1]=new Option("Белая", "100", false, false);
}
if(chto==6){
document.calcForm.master2.options.length=0;
document.calcForm.master2.options[0]=new Option("---", "0", true, false);
document.calcForm.master2.options[1]=new Option("Белая", "100", false, false);
}
if(chto==7){
document.calcForm.master2.options.length=0;
document.calcForm.master2.options[0]=new Option("---", "0", true, false);
document.calcForm.master2.options[1]=new Option("Белая", "100", false, false);
}
if(chto==8){
document.calcForm.master2.options.length=0;
document.calcForm.master2.options[0]=new Option("---", "0", true, false);
document.calcForm.master2.options[1]=new Option("Белая", "100", false, false);
}
if(chto==9){
document.calcForm.master2.options.length=0;
document.calcForm.master2.options[0]=new Option("---", "0", true, false);
document.calcForm.master2.options[1]=new Option("Белая", "100", false, false);
}
if(chto==10){
document.calcForm.master2.options.length=0;
document.calcForm.master2.options[0]=new Option("---", "0", true, false);
document.calcForm.master2.options[1]=new Option("Белая", "100", false, false);
}
}

// Меню категорий - Переход по ссылке

$(document).ready(function(){if($('#del2 option:selected').val()==0)

$('#del2').change(function(){ if($('#del2 option:selected').val()==1)
{$('a#sel').attr("href","/category/zhivaya-priroda/");}
if($('#del2 option:selected').val()==2)
{$('a#sel').attr("href","/category/nezhivaya-priroda/");}
if($('#del2 option:selected').val()==3)
{$('a#sel').attr("href","/category/geografiya/");}
if($('#del2 option:selected').val()==4)
{$('a#sel').attr("href","/");}
if($('#del2 option:selected').val()==5)
{$('a#sel').attr("href","/");}
if($('#del2 option:selected').val()==6)
{$('a#sel').attr("href","/");}
if($('#del2 option:selected').val()==7)
{$('a#sel').attr("href","/");}
if($('#del2 option:selected').val()==8)
{$('a#sel').attr("href","/");}
if($('#del2 option:selected').val()==9)
{$('a#sel').attr("href","/");}
if($('#del2 option:selected').val()==10)
{$('a#sel').attr("href","/category/kosmos/");}
return false;});
});

// Меню категорий - активация кнопки перейти

$(document).ready(function(){

  $("#del2").change(
     function(){
      $("#sel").removeClass("disabled");
    }
  );

});
