function set_error_reporting($type=0,$custom=''){

	switch ($type)

	{

		default:

 		case 'none':

		case 'null':

		case '0'://no error reporting . its default

			error_reporting(0);

			break;

		case '1':	

		case 'min'://minimum error reporting with error , warning and parse error will be shown

			error_reporting(E_ERROR | E_WARNING | E_PARSE);

			ini_set('display_errors', 1);

			break;

		case '2':

		case 'max'://maximum error reporting:all error will be reported

			error_reporting(E_ALL);

			ini_set('display_errors', 1);

			break;

		case '3':

		case 'dev'://devlopment mode

			error_reporting(-1);

			ini_set('display_errors', 1);

			break;

		case '4':

		case 'custom'://custom mode

			error_reporting($custom);

 			break;





	}

}
