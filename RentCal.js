
const mspd= 1000 * 60 * 60 * 24;
function myFunction()
{
    var nm = document.getElementById("name").value;
    var mrent = document.getElementById("mrent").value;
    var dim =document.getElementById("dim").value;

    var startdate = document.getElementById("startdate").value;
    var enddate = document.getElementById("enddate").value;
    
    let sd = new Date(startdate);
    let ed = new Date(enddate);
  
    let day =Math.floor((ed - sd) / mspd);
    // alert(day);

    var address = document.getElementById("address").value;

    document.getElementById("name1").value=nm;
    
    var rpd = mrent/dim;
    var rpy = mrent*12;
    let trent=rpd*day;

    document.getElementById("trent").value=trent.toFixed(2);
    document.getElementById("rpd").value=rpd.toFixed(2);
    document.getElementById("rpy").value=rpy.toFixed(2);
    document.getElementById("sdate").value=startdate;
    document.getElementById("edate").value=enddate;

    // alert(nm);
}