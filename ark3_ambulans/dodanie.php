<?PHP
if (isset($_POST['submit'])) {
    add();
}
function add()
{
    $conn = new mysqli("localhost", 'root', null, "3tipg_ambulans");
    $jeden = trim($_POST['jeden']);
    $dwa = trim($_POST['dwa']);
    $trzy = trim($_POST['trzy']);
    $karetka = strval($_POST['karetka']);
    $sql = "INSERT INTO `ratownicy`(`nrKaretki`, `ratownik1`, `ratownik2`, `ratownik3`) VALUES ('$karetka','$jeden','$dwa','$trzy')";
    if (empty($jeden) && empty($dwa) && empty($trzy) && empty($ambulans)) {
        echo ("<span color:red>Nie wprowadziłeś wszystkiego</span>");
    } else {
        $conn->query($sql);
        echo ("Do bazy zostało wysłane zapytanie: $sql");
    }

    $conn->close();
    header("Location: ratownicy.html");
}
function display(){
    
}
