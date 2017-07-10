<?php
function consoleLog ($message) {
    $value = $message;
    if ( is_array( $value ) )
        $value = implode( ',', $value);

    echo "
    <script  type='text/javascript'>
    console.log( 'PHP-LOG:".$value."');
    </script>";
}
function ErrorLog ($message) {
    $value = $message;
    if ( is_array( $value ) )
        $value = implode( ',', $value);

    echo "
    <script  type='text/javascript'>
    console.log('PHP-Error-Log: %c ".$value." ', 'background: #c0392b; color: #ecf0f1');
    </script>";
}
function SuccessLog ($message) {
    $value = $message;
    if ( is_array( $value ) )
        $value = implode( ',', $value);

    echo "
    <script  type='text/javascript'>
    console.log('PHP-Success-Log: %c ".$value." ', 'background: #2ecc71; color: #ecf0f1');
    </script>";
}
function WarningLog ($message) {
    $value = $message;
    if ( is_array( $value ) )
        $value = implode( ',', $value);

    echo "
    <script  type='text/javascript'>
    console.log('PHP-Warning-Log: %c ".$value." ', 'background: #e67e22; color: #ecf0f1');
    </script>";
}
function InfoLog ($message) {
    $value = $message;
    if ( is_array( $value ) )
        $value = implode( ',', $value);

    echo "
    <script  type='text/javascript'>
    console.log('PHP-Info-Log: %c ".$value." ', 'background: #f1c40f; color: #ecf0f1');
    </script>";
}
 ?>
