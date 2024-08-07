console.log("Script");

var college_dropdown= document.getElementById("college");
var department_dropdown= document.getElementById("department");
var name_dropdown= document.getElementById("name");

async function getCollege(){
    var response= await fetch("http://localhost/payment%20due/api_data.php");

    var json_data=await response.json();

    console.log(json_data);

    college_dropdown.innerHTML="";
    json_data.forEach((item)=>{
        var option= document.createElement("option");
        // option.text="Select";
        // option.value="Select"
        option.text=item.c_name;
        option.value=item.c_name;
      
        college_dropdown.appendChild(option);
    });
}


async function getDepartment(c_name){
    var response=await fetch(
        "http://localhost/payment%20due/api_data.php?type=department&c_name=" + c_name
    );

    var json_data = await response.json();

    console.log(json_data);

    department_dropdown.innerHTML="Select Department";
    json_data.forEach((item)=>{
        var option= document.createElement("option");
        option.text=item.dept;
        option.value=item.dept;

        department_dropdown.appendChild(option);
    });
}

async function getName(dept, c_name){
    var response=await fetch(
        "http://localhost/payment%20due/api_data.php?type=name&c_name=" + c_name + "&dept=" + dept
    );

    var json_data = await response.json();

    console.log(json_data);

    name_dropdown.innerHTML="";
    json_data.forEach((item)=>{
        var option= document.createElement("option");
        option.text=item.s_name;
        option.value=item.s_name;
        
        name_dropdown.appendChild(option);
    });
}

getCollege();

college_dropdown.onchange = function (){
    getDepartment(college_dropdown.value);
}
department_dropdown.onchange = function (){
    getName(department_dropdown.value, college_dropdown.value);
}


