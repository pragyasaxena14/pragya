// $("#f_add").click(function(e) {
//     $("#thenewfield").append($("#thenewfield div.input:eq(0)").clone(true));
//     $("#thenewfield div.input").eq(-1).find("input").val('');
    
//     e.preventDefault();
// });
// var _counter = 0;
//     function Add() {
//        _counter++;
//         var oClone = document.getElementById("input").cloneNode(true);
//         oClone.id += (_counter + "");
//         document.getElementById("placeholder").appendChild(oClone);
//         if(_counter>0)
//         {
//             // document.getElementById("fname").value=" ";
//             // document.getElementById("lname").value=" ";
//             // document.getElementById("email").value=" ";
// document.createElement
//         }
//     }
//onclick="Add(); return false;"

// function CloneForm(formName) {
//     var formCount = document.forms.length;
//     var oForm = document.forms[formName];
//     var clone = oForm.cloneNode(true);
//     clone.name += "New form " + formCount;
//     document.body.appendChild(clone);
// }
function Add(){
var fieldset= document.getElementById('fieldset');
var fieldParent = fieldset.parentNode;
var newFieldSet = document.createElement('fieldset');
newFieldSet.innerHTML = fieldset.innerHTML;
fieldParent.appendChild(newFieldSet);
}