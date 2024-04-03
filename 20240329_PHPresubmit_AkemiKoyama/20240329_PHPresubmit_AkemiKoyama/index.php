<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プププランドストア</title>
    <style>

        .body{
            justify-content: center;
            justify-items: center;
        }

        .flex-container {
            display: flex;
            justify-content: center; /* Center items horizontally */
            align-items: center; /* Center items vertically */
            height: 50%; /* Adjust the height as needed */
        }

        .div{
            margin-left: 1%;
        }
    </style>
</head>

<body>
    <center>
    <h2>プププランドストア</h2>

    <form action="process_order.php" method="post" onsubmit="return validateForm();">
        <div class="flex-container">
            <div>
                <h3>シチュー</h3>
                <img src="kirby.png" alt="Item 1 Image" style="width: 100px; height: 100px;">
                <p>ピンクでふわふわな食いしん坊</p>
                <label for="itemA">個数</label>
                <input type="number" id="itemA" name="itemA" value="0" min="0"><br><br>
            </div>
            <div>
                <h3>カレー</h3>
                <img src="waddle.png" alt="Item 2 Image" style="width: 100px; height: 100px;">
                <p>デデデ大王の配下の可愛いやつ</p>
                <label for="itemB">個数</label>
                <input type="number" id="itemB" name="itemB" value="0" min="0"><br><br>
            </div>
        </div>

        <label for="name">名前</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="address">住所</label>
        <input type="text" id="address" name="address" required><br><br>
        
        <input type="submit" value="送信">
        </form>
        </center>

        <script>
           function validateForm() {
            var itemA = document.getElementById("itemA").value;
            var itemB = document.getElementById("itemB").value;

            if (parseInt(itemA) <= 0 && parseInt(itemB) <= 0) {
                alert("おともだちをひとり以上選ばないと注文を送信できません。");
                return false;
            }

            return true;
            }
       </script>
</body>
</html>
