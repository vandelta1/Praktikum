 function cont()
 {
    var n1 = parseFloat(document.getElementById('n1').value);
    if (n1 >= 81 && n1<=100)
    {
        document.getElementById('result').value = "A";
    }

    else if(n1 >= 71 && n1<=80){
        document.getElementById('result').value = "AB";
    }

    else if(n1 >= 66 && n1<=70){
        document.getElementById('result').value = "B";
    }

    else if(n1 >= 61 && n1<=65){
        document.getElementById('result').value = "BC";
    }    

    else if(n1 >= 56 && n1<=60){
        document.getElementById('result').value = "C";
    }

    else if(n1 >= 41 && n1<=55){
        document.getElementById('result').value = "D";
    }    

    else
    {
        document.getElementById('result').value = "E";
    }
}