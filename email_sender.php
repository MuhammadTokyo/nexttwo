<?php
session_start();
var_dump($name = $_GET["mailer_name"]);
$mail= $_GET["mailer_mail"]; 
$phone=$_GET["mailer_phone"]; 

$option = isset($_GET['mailer_category']) ? $_GET['mailer_category'] : false;
if ($option) {
   echo htmlentities($_GET['mailer_category'], ENT_QUOTES, "UTF-8");
} else {
  echo "task option is required";
  exit; 
}

$category=$option; 

switch ($category) {
        case 1:
            return "会員登録に関する質問・申込";
            break;
        case 2:
            return "有力企業フェアへの参加申込";
            break;
        case 3:
            return "行政書士の紹介依頼";
            break;
        case 4:
                return "人材会社の紹介依頼";
                break;
        case 5:
                return "セミナーの受講申込";
                break;
        case 6:
                return "資格試験の受験申込";
                break;
        case 7:
            return "資格試験参考書の購入申込";
            break;
        case 8:
            return "コンプライアンスの相談・対策";
            break;
        case 9:
                return "ビザミシュランの相談・申込";
                break;
        case 10:
                return "スクールチェックの相談・申込";
                break;
        case 11:
                return "外国人総合顧問サービスの相談・申込";
                break;
        case 12:
                    return "申請業務受託の相談・申込";
                    break;
        case 13:
                    return "入管法違反等に関する情報提供";
                    break;   
        case 14:
                    return "その他のご質問・ご相談";
                    break;               
                                  
    }
    



$says=$_GET["mailer_says"]; 

echo $name;
echo "<br>";
echo $mail;
echo "<br>";

echo $phone;
echo "<br>";

echo $category;
echo "<br>";

echo $says;

echo "page running ";


?>