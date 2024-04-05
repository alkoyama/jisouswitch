<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プププランドストア</title>
  <link rel="stylesheet" href="pppland.css">
</head>

<body>
    <center>
    <h2>プププランドストア</h2>

    <form action="process_order.php" method="post" onsubmit="return validateForm();">
        <div class="flex-container">
            <div>
                <h3>カービィ</h3>
                <img src="kirby.png" alt="Item 1 Image" style="width: 100px; height: 100px;">
                <p>ピンクでふわふわな食いしん坊</p>
                <label for="itemA">個数</label>
                <input type="number" id="itemA" name="itemA" value="0" min="0"><br><br>
            </div>
            <div>
                <h3>ワドルディ</h3>
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

    <script src="blankjs.js" defer></script>
</body>
</html>
