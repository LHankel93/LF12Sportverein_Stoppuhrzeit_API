<p>--startseite anfang--</p>
<div class="container_test_post_links">
    <ul>
        <form id="startseite_form" action="./view/test_post.php" method="post" aria-label="Web-API Links" aria-description="Form mit Buttons als Links zu den einzelnen Funktionen der Web-API">
            <li><input type="submit" name="foo" value="Button 1 gedrückt" /></li>
            <li><input type="submit" name="foo" value="Button 2 gedrückt" /></li>
        </form>
    </ul>
</div>
<div class="container_test_python_skript">
    <p>Hier wird ein Python Skript angesprochen und der Input Wert +1 gerechnet.</p>
    <form id="startseite_form_python" action="./view/test_python.php" method="get" aria-label="Python in PHP aufrufen." aria-description="Form um ein Python Skript zu testen">
        <input type="number" name="foo" value="1"/>
        <input type="submit" name="bar" value="submit"/>
    </form>
</div>

<p>--startseite ende--</p>