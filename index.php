<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>toevoegen</title>
</head>
<body>
    <div id="los">
        <form>
            <fieldset>
                <legend>lose merken toevoegen:</legend>
                <label for="merk">laptop/pc merk toevoegen</label>
                <input type="text" id="merk" name="merk">
                <input type="submit" value="submit">
            </fieldset>
        </form>
    </div><br>
    <div id="form">
        <form>
            <fieldset>
                <legend>product samen stellen</legend>
                <label for="merk">selecteer laptop/pc merk:</label>
                    <select id="merk" naam="merk">
                        <option value="HP">HP</option>
                        <option value="lenovo">lenovo</option>
                        <option value="dell">dell</option>
                    </select>
                    <br>
                    <br>
                    <label for="model">voor modelnaam in</label>
                    <br>
                    <input type="text" id="model" name="model">
                    <br>
                    <label for="serienummers">vul hier serienummers in</label>
                    <br>
                    <textarea name="serienummers" rows="20" cols="40"></textarea>
                    <br>
                    <input type="range" min="0" max="1000" value="120" class="slider" id="myslider">
                    <p>aantal: <span id="aantal"></span></p>
                    <label for="actief">product actief</label>
                    <br>
                    <input type="checkbox" id="actief" name="actief" value="1">
                    <label for="ja">voorraad online</label>
            </fieldset>
        </form>
    </div>
    <script>
        var slider =document.getElementById("myslider");
        var output = document.getElementById("aantal");
        output.innerHTML = slider.value;

        slider.oninput = function() {
            output.innerHTML = this.value;
        }
    </script>
</body>
</html>