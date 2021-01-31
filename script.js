$(document).ready(function(){

    $(".select1").change(function(){

        $(this).find("option:selected").each(function(){

            var optionValue = $(this).attr("value");

            if(optionValue){

                $(".container2").not("." + optionValue).hide();

                $("." + optionValue).show();

            } else{

                $(".container2").hide();

            }

        });

    }).change();

  $(".select2").change(function(){

      $(this).find("option:selected").each(function(){

          var optionValue = $(this).attr("value");

          if(optionValue){

              $(".container3").not("." + optionValue).hide();

              $("." + optionValue).show();

          } else{

              $(".container3").hide();

          }

      });

  }).change();

});


function Search() {

document.getElementById("all_courses").setAttribute("style","display:none");
document.getElementById("search_courses").removeAttribute("style","display:none");
}

function add_instructor_field_2() {
document.getElementById("add_instructor_field2").setAttribute("style","display:none");
document.getElementById("instructor_field_2").removeAttribute("style","display:none");
}

function add_instructor_field_3() {
document.getElementById("add_instructor_field3").setAttribute("style","display:none");
document.getElementById("instructor_field_3").removeAttribute("style","display:none");
}

function remove_instructor_field_3() {
document.getElementById("add_instructor_field3").removeAttribute("style","display:none");
document.getElementById("instructor_field_3").setAttribute("style","display:none");
}

function remove_instructor_field_2() {
document.getElementById("add_instructor_field2").removeAttribute("style","display:none");
document.getElementById("instructor_field_2").setAttribute("style","display:none");
}

function nextPage() {
document.getElementById("page2").removeAttribute("style","display:none");
document.getElementById("page1").setAttribute("style","display:none");
}

function prevPage() {
document.getElementById("page1").removeAttribute("style","display:none");
document.getElementById("page2").setAttribute("style","display:none");
}
