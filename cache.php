// получаем название файла с URL c помощью шифрования md5:
$cache_file = '/chache/'.md5( $_SERVER['REQUEST_URI'] ).'.tmp';

// если файл кэша существует и обновлялся менее чем час назад, тогда подключаем его:
if ( file_exists( $cache_file ) && ( time(  ) - filemtime( $cache_file ) ) < 3600 )
  include( $cache_file ) ;
else
 {
 // включает буферизацию вывода:
 ob_start(  );
 
 ///
 
 echo 4+3;
 
 ///
 // сохраняем содержимое страницы в кэш-файл:
 $fopendb = fopen( $cache_file, 'w+' );
 flock( $fopendb, LOCK_EX );
 fwrite( $fopendb, ob_get_contents(  ) );
 flock( $fopendb, LOCK_UN );
 fclose( $fopendb );
 ob_end_flush(  );
 }
