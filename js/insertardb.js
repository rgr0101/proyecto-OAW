document.getElementById("formulario").addEventListener("submit",(function(e){e.preventDefault();let t=document.getElementById("feedurl").value,r=new FormData;r.append("feedurl",t),fetch("insertardb.php",{method:"POST",body:r}).then((e=>{if(e.ok)return e.text();throw new Error("Error RESPUESTA DEL SERVER")})).then((e=>{console.log(e),alert(e)})).catch((e=>{console.error(e)}))}));