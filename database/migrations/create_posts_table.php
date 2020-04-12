Schema :: create (’posts ’, function ( Blueprint $table ) {
$table -> increments (’id ’);
$table -> timestamps ();
$table -> string (’title ’);
$table -> text (’ content ’);
});