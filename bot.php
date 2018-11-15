<?php
include 'FbBot.php';
$tokken = $_REQUEST['hub_verify_token'];
$hubVerifyToken = 'cloudwaysschool';
$challange = $_REQUEST['hub_challenge'];
$accessToken = 'your_page_token';
$bot = new FbBot();
$bot->setHubVerifyToken($hubVerifyToken);
$bot->setaccessToken($accessToken);
echo $bot->verifyTokken($tokken,$challange);
$input = json_decode(file_get_contents('php://input'), true);
$message = $bot->readMessage($input);
$textmessage = $bot->sendMessage($message);
#
if($messageText == 'hi') { 
$answer = "Hello! How may I help you today "; $response = [
'recipient' => [ 'id' => $senderId ], 'message' => [ 'text' => $answer ], 'access_token' => $this->accessToken 
];
}
#
elseif(strpos($messageText, 'blog')) {                    
 $answer = ["attachment"=>[       
"type"=>"template",       
"payload"=>[         
"template_type"=>"generic",        
 "elements"=>[[             
"title"=>"Migrate your symfony application",             "item_url"=>"https://www.cloudways.com/blog/migrate-symfony-from-cpanel-to-cloud-hosting/",             "image_url"=>"https://www.cloudways.com/blog/wp-content/uploads/Migrating-Your-Symfony-Website-To-Cloudways-Banner.jpg",             
"subtitle"=>"Migrate your symfony application from Cpanel to Cloud.",             
"buttons"=>[[                
 "type"=>"web_url",                 
 "url"=>"www.cloudways.com",                 
 "title"=>"View Website"               
],[                 
"type"=>"postback",                 
"title"=>"Start Chatting",                 
"payload"=>"Even want some more? say me!"               ]                           ]]]       
]     
]];
$response = [                         
'recipient' => [ 'id' => $senderId ],                         'message' => $answer,             
'access_token' => $this->accessToken                      
];                 
}
#
elseif (strpos($messageText, 'list')){
 $answer = ["attachment"=>[
      "type"=>"template",
      "payload"=>[
        "template_type"=>"list",
        "elements"=>[
            [
            "title"=>"Migrate symfony from cpanel",
            "item_url"=>"https://www.cloudways.com/blog/migrate-symfony-from-cpanel-to-cloud-hosting/",
            "image_url"=>"https://www.cloudways.com/blog/wp-content/uploads/Migrating-Your-Symfony-Website-To-Cloudways-Banner.jpg",
            "subtitle"=>"We've got the right hat for everyone.",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"https://cloudways.com",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Multipurpose Theme Design and Versatility",
            "item_url"=>"https://www.cloudways.com/blog/multipurpose-wordpress-theme-for-agency/",
            "image_url"=>"https://www.cloudways.com/blog/wp-content/uploads/How-a-multipurpose-WordPress-theme-can-help-your-agency-Banner.jpg",
            "subtitle"=>"We've got the right theme for everyone.",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"https://cloudways.com",
                "title"=>"View Website"
              ],
            ]
          ],
            [
            "title"=>"Add Custom Discount in Magento 2",
            "item_url"=>"https://www.cloudways.com/blog/add-custom-discount-magento-2/",
            "image_url"=>"https://www.cloudways.com/blog/wp-content/uploads/M2-Custom-Discount-Banner.jpg",
            "subtitle"=>"Learn adding magento 2 custom discounts.",
            "buttons"=>[
              [
                "type"=>"web_url",
                "url"=>"https://cloudways.com",
                "title"=>"View Website"
              ],
            ]
          ]
        ]
      ]
    ]];
 $response = ['recipient' => ['id' => $senderId], 'message' =>  $answer, 'access_token' => $this->accessToken];}
