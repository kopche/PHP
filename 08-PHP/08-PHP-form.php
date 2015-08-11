<form action="data.php?submit=true&test=2" method="POST" > 
        Име: <input type="text" name="name" />
    <br />
    Email: <input type="text" name="mail" />
    <br />
        Парола:
        <input type="password" name="pass" />
    <br />
        Пол:
                <input type="radio" name="gender" value="Male" /> Мъж
                <input type="radio" name="gender" value="Famale" /> Жена
        <br />
    Изпрати ми бюлетин: <input type="checkbox" name="subscribe" />
    <br />
        <input type="submit" value="Изпрати" />
     
<select name= "countries[]" multiple="yes">
<option value="BG">BG</option>;
<option value="UK">UK!</option>;
<option value="USA">UESAA</option>
</form>