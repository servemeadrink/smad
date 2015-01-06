<?php

include("model/AddBusiness.php");

class BusinessController
{
    //Name
    public $name;

    function setName($value)
    {
        $this->name = $value;
    }

    function getName()
    {
        return $this->name;
    }

    //City
    public $city;

    function setCity($value)
    {
        $this->city = $value;
    }

    function getCity()
    {
        return $this->city;
    }

    //Adress
    public $address;

    function setAddress($value)
    {
        $this->adress = $value;
    }

    function getAddress()
    {
        return $this->adress;
    }

    //Descript
    public $descript;

    function setDescript($value)
    {
        $this->descript = $value;
    }

    function getDescript()
    {
        return $this->descript;
    }

    //Nature
    public $nature;

    function setNature($value)
    {
        $this->nature = $value;
    }

    function getNature()
    {
        return $this->nature;
    }

    //Country
    public $country;

    function setCountry($value)
    {
        $this->country = $value;
    }

    function getCountry()
    {
        return $this->country;
    }

    //Zip
    public $zip;

    function setZip($value)
    {
        $this->zip = $value;
    }

    function getZip()
    {
        return $this->zip;
    }

    //Phone
    public $phone;

    function setPhone($value)
    {
        $this->phone = $value;
    }

    function getPhone()
    {
        return $this->phone;
    }

    //mail
    public $email;

    function setEmail($value)
    {
        $this->email = $value;
    }

    function getEmail()
    {
        return $this->email;
    }

    function add()
    {

        if(!empty($_POST['name']) && !empty($_POST['description']) && !empty($_POST['country']) && !empty($_POST['city'])
        && !empty($_POST['zip_code']) && !empty($_POST['address']))
        {
            $this->setName($_POST['name']);
            $this->setDescript($_POST['description']);
            $this->setCountry($_POST['country']);
            $this->setCity($_POST['city']);
            $this->setZip($_POST['zip_code']);
            $this->setAddress($_POST['address']);

            $_SESSION['preview']['e_name'] = $this->getName();
            $_SESSION['preview']['e_descript'] = $this->getDescript();
            $_SESSION['preview']['e_country'] = $this->getCountry();
            $_SESSION['preview']['e_city'] = $this->getCity();
            $_SESSION['preview']['e_zip'] = $this->getZip();
            $_SESSION['preview']['e_address'] = $this->getAddress();

            if(isset($_POST['phone']))
            {
                $this->setPhone($_POST['phone']);
                $_SESSION['preview']['e_phone'] = $this->getPhone();
            }

            if(isset($_POST['email']))
            {
                $this->setEmail($_POST['email']);
                $_SESSION['preview']['e_email'] = $this->getEmail();
            }


            //Upload de l'image business -------------------------

            if($_FILES['business']['error'] == 0)
            {
                // On donne un nom

                $nom = stripslashes($this->getName());

                $nom = str_replace("'", "", $nom);

                $nom = str_replace(" ", "", $nom);

                $nom = str_replace("é", "", $nom);

                $nom = str_replace("à", "", $nom);

                //on récupère les tailles de l'image

                $image_info = getimagesize($_FILES['business']['tmp_name']);
                $image_width = $image_info[0];
                $image_height = $image_info[1];

                $min_width = 426;
                $min_height = 154;

                if( ($image_width >= $min_width) && ($image_height >= $min_height) )
                {
                    //------------------Pour crop l'image-----------------------------

                    $r_x = intval($image_width / $min_width);
                    $r_y = intval($image_height / $min_height);

                    $min_rxry = min($r_x,$r_y);

                    //les coordonnées de l'origine (en haut a droit du crop)
                    $ox = intval(($image_width-($min_rxry)*$min_width)/2);
                    $oy = intval(($image_height-($min_rxry)*$min_height)/2);

                    //Le tableau pour crop l'image
                    $to_crop_array = array(
                        'x'=>$ox,
                        'y'=>$oy,
                        'width'=>$min_rxry*$min_width,
                        'height'=>$min_rxry*$min_height
                    );

                    //////////////////////////////////

                    $_FILES['business']['ext'] = strtolower(  substr(  strrchr($_FILES['business']['name'], '.')  ,1)  );

//                    var_dump($_POST); var_dump($_FILES['business']);

                    if( $_FILES['business']['ext'] == 'jpg' OR $_FILES['business']['ext'] == 'jpeg' OR $_FILES['business']['ext'] == 'png' )
                    {
                        if($_FILES['business']['ext'] == 'jpg' OR $_FILES['business']['ext'] == 'jpeg')
                        {
                            $im = imagecreatefromjpeg($_FILES['business']['tmp_name']);
                        }

                        if($_FILES['business']['ext'] == 'png')
                        {
                            $im = imagecreatefrompng($_FILES['business']['tmp_name']);
                        }

                        $new_image = $nom.''.rand(1, 100).'.'.$_FILES['business']['ext'];

                        $thumb_im = imagecrop($im, $to_crop_array);
                        imagejpeg($thumb_im, $new_image, 100);

                        $name = "ressources/couv/business/".$new_image;

                        $_SESSION['preview']['e_url_business'] =  $name;
                        //Copie l'image créée

                        copy($new_image, $name);
                        unlink($new_image);
                    }
                    else
                    {
                        header('Location: index.php?url=addbusiness&error=4');

                    }
                }
                else
                {
                    header('Location: index.php?url=addbusiness&error=3');
                }
            }
            else
            {
                header('Location: index.php?url=addbusiness&error=2');
            }


            //Upload de l'image showroom -------------------------

            if($_FILES['showroom']['error'] == 0)
            {
                // On donne un nom

                $nom = stripslashes($this->getName());

                $nom = str_replace("'", "", $nom);

                $nom = str_replace(" ", "", $nom);

                $nom = str_replace("é", "", $nom);

                $nom = str_replace("à", "", $nom);

                //on récupère les tailles de l'image

                $image_info = getimagesize($_FILES['showroom']['tmp_name']);
                $image_width = $image_info[0];
                $image_height = $image_info[1];

                $min_width = 854;
                $min_height = 520;

                if( ($image_width >= $min_width) && ($image_height >= $min_height) )
                {
                    //------------------Pour crop l'image-----------------------------

                    $r_x = intval($image_width / $min_width);
                    $r_y = intval($image_height / $min_height);

                    $min_rxry = min($r_x,$r_y);

                    //les coordonnées de l'origine (en haut a droit du crop)
                    $ox = intval(($image_width-($min_rxry)*$min_width)/2);
                    $oy = intval(($image_height-($min_rxry)*$min_height)/2);

                    //Le tableau pour crop l'image
                    $to_crop_array = array(
                        'x'=>$ox,
                        'y'=>$oy,
                        'width'=>$min_rxry*$min_width,
                        'height'=>$min_rxry*$min_height
                    );

                    //////////////////////////////////

                    $_FILES['showroom']['ext'] = strtolower(  substr(  strrchr($_FILES['showroom']['name'], '.')  ,1)  );

                    if( $_FILES['showroom']['ext'] == 'jpg' OR $_FILES['showroom']['ext'] == 'jpeg' OR $_FILES['showroom']['ext'] == 'png' )
                    {
                        if($_FILES['showroom']['ext'] == 'jpg' OR $_FILES['showroom']['ext'] == 'jpeg')
                        {
                            $im = imagecreatefromjpeg($_FILES['showroom']['tmp_name']);
                        }

                        if($_FILES['showroom']['ext'] == 'png')
                        {
                            $im = imagecreatefrompng($_FILES['showroom']['tmp_name']);
                        }

                        $new_image2 = $nom.'2'.rand(1, 100).'.'.$_FILES['business']['ext'];

                        $thumb_im = imagecrop($im, $to_crop_array);
                        imagejpeg($thumb_im, $new_image2, 100);

                        $name = "ressources/couv/showroom/".$new_image2;

                        $_SESSION['preview']['e_url_showroom'] =  $name;

                        //Copie l'image créée

                        copy($new_image2, $name);
                        unlink($new_image2);

                        ///////////////////////////////////////////////////////////////////////////////
                        ///////////////     QUAND TOUT EST BON ///////////////////////////////////////
                        /////////////////////////////////////////////////////////////////////////////

                        header('Location: index.php?url=etablissement');
                    }
                    else
                    {
                        header('Location: index.php?url=addbusiness&error=7');

                    }
                }
                else
                {
                    header('Location: index.php?url=addbusiness&error=6');
                }
            }
            else
            {
                header('Location: index.php?url=addbusiness&error=5');
            }

        }
        else
        {
            header('Location: index.php?url=addbusiness&error=1');
        }


    }
}

$controller = new BusinessController;

if(!isset($_GET['validate']) && $_GET['validate'] != 1)
{
    $controller-> add();
}
else
{
    //On ajoute l'établissement
    $inclusion = new Esta();
    $inclu = $inclusion->AddEsta($_SESSION['u_id'],$_SESSION['preview']['e_name'],$_SESSION['preview']['e_city'],$_SESSION['preview']['e_address'],
        $_SESSION['preview']['e_descript'],0,$_SESSION['preview']['e_country'],$_SESSION['preview']['e_zip'], $_SESSION['preview']['e_phone'],
        $_SESSION['preview']['e_mail'], $_SESSION['preview']['e_url_business'], $_SESSION['preview']['e_url_showroom']);
    $cherche = $inclusion->memoryEsta($_SESSION['u_id'],$_SESSION['preview']['e_name']);


    //On détruit la session preview
    if(isset($_SESSION['preview']))
    {
        unset($_SESSION['preview']);
    }

    header('Location: index.php?url=etablissement&id='.$cherche[0]['e_id']);
}
