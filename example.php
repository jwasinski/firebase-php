<?

    /// Firebase PHP Setup

    require_once 'firebase.php';
    $fburl = 'https://XXXXXX.firebaseio.com/';
    $token = 'XXXXX';

////////////////////////////////////////////////////////////////////////////////

    /// Testing Setup Values

    $firebasePath = '/Customer_Onboarding/447838828838/a/';
    $data = array(
        'Test1' => 'alpha',
        'Test2' => 'beta'
    );


////////////////////////////////////////////////////////////////////////////////

    /// Firebase Create Data With Generated ID

    $fb = new fireBase($fburl, $token);
    $fbid = json_decode($fb -> push($firebasePath,$data), true);

////////////////////////////////////////////////////////////////////////////////

    /// Firebase Overwrite Data In Path

    $fb = new fireBase($fburl, $token);
    $result = json_decode($fb -> set($firebasePath,$data));

////////////////////////////////////////////////////////////////////////////////

    /// Firebase Update Data In Path

    $fb = new fireBase($fburl, $token);
    $result = json_decode($fb -> update($firebasePath,$data));

////////////////////////////////////////////////////////////////////////////////    

    /// Firebase Get Data In Path

    $fb = new fireBase($fburl, $token);
    $result = json_decode($fb -> get($firebasePath,$data));

////////////////////////////////////////////////////////////////////////////////    


    /// Firebase Search Query & Value
    
    $path = 'Customer_Onboarding';
    $query = 'Link';
    $value = 'j81ldb';    

    /// Send Query To Firebase

    $fb = new fireBase($fburl, $token);
    $data =  $fb -> query($path, $query, $value);

    /// Get Parent Folder ID

    echo $data[0];
        
    /// List Variables In Data
    foreach ($data[1] as $k=>$v){
        echo $k.' '.$v.'<br>';
    }

    /// Return Variable Value
    echo $data['Date'];   


////////////////////////////////////////////////////////////////////////////////



?>
