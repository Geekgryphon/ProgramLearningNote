<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
</head>
<body>
    <button id="button1">一顆按鈕</button>
    <button id="button2">兩顆按鈕</button>
    <div id="response">

    </div>

    <script>
        document.getElementById("button1").addEventListener("click", function(){
            var xhr = new XMLHttpRequest();
            document.getElementById("button1").style.display = "none" ;
        
            xhr.onreadystatechange = function(){
                if(xhr.readyState == XMLHttpRequest.DONE){
                    if(xhr.status == 200){
                        var response = xhr.responseText;
                        document.getElementById("response").innerHTML = response;
                    }else{
                        console.log(xhr.status);
                        console.error("請求失敗: " + xhr.status);
                    }
                }
            }

            xhr.open("POST","process.php", true);
            xhr.send("data=1");
        });
    </script>
</body>
</html>