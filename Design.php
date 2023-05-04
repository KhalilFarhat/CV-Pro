<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4dbad2a688.js" crossorigin="anonymous"></script>
    <script src="jquery-3.6.3.min.js"></script>
    <!-- <link rel="stylesheet" href="Design1.css"> -->
    <link rel="stylesheet" href="Design.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="script.js" defer></script>
    <title>Document</title>
</head>
<body>

    <header>
        <button class="download" onclick="javascript:history.back()">Resumes</button>
        <div class="Titled-resume">Untitled Resume</div>
        <div class="download" >
            <i onclick="print()" class="fa fa-download"></i>
            <input onmouseleave="print()" onclick="print1()" type="submit"  class="dnbtn" id="submit-btn" name="Submit" value="Download" style="height: fit-content; margin: 5px;">
        </div>
    </header>
    <section class="Sides" style="width: 100%; height: 100%; display: flex;">
        <form method="post" id="myform" action="template.php"  class="Left-side"  enctype="multipart/form-data" > 
            <div class="container-1">
            <div class="first-row">
                    <button onclick="Pdet()" class="btn-1" id="PDet-btn">Personal details</button>
                    <div style="display: flex;">
                        <div id="detdrop" class="dropdown-content">
                            <a onclick="detclear()">Clear Section</a>
                        </div>
                        <button id="pdetoptions" class="btn-2 btn" style="display: none;"  onclick="dropdet()">
                            <svg class="svg" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16"> 
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </button>
                        <button onclick="Pdet()" class="btn-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="px-0.5 flex-shrink-0 box-content h-6 w-5">
                                <path id="Pdet-btn-2" stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="Personal-Details child" id="P-Details" style="display: none;">
                    <div>
                        <div class="personal-info" style="display: flex;">
                            <div class="photo" >
                                <img id="image" src="https://cdn11.bigcommerce.com/s-4f830/stencil/21634b10-fa2b-013a-00f1-62a1dd733893/e/4a0532a0-6207-013b-8ab2-261f9b1f5b00/icons/icon-no-image.svg" alt="your image" name="main_img"/>
                                <input type="file" name="image"  accept="image/png, image/gif, image/jpeg" class="profile" onchange="readURL(this); required"/>
                            </div>

                            <div class="name-email input">
                                <div class="Name-G-L input" style="display: flex;">
                                    <div class="Given Name input">
                                        <label for="First-Name">Given Name</label>
                                        <input type="text" name="First-Name" id="FNAME">
                                    </div>
                                    <div class="Family Name input">
                                        <label for="Last-Name">Family Name</label>
                                        <input type="text" name="Last-Name" id="LNAME">
                                    </div>
                                </div>
                                <div class="Email-Address input">
                                    <label for="Email">Email address</label>
                                    <input type="text" name="Email" id="MAIL">
                                </div>
                            </div>
                        </div>
                        <div class="Headline input">
                            <label for="headline">Headline</label>
                            <input type="text" name="headline" id="HEADLINE">
                        </div>
                        <div class="Phone-# input">
                            <label for="phone-number">Phone number</label>
                            <input type="text" name="phone-number" id="PHONE#">
                        </div>
                        <div class="Address input">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="ADDRESS">
                        </div>
                        <div class="Code-City input" style="margin: 0; display: flex;">
                            <div class="Post_Code input">
                                <label for="P-Code">Post Code</label>
                                <input type="text" name="P-Code" id="PCODE">
                            </div>
                            <div class="City input">
                                <label for="City-input">City</label>
                                <input type="text" name="City-input" id="CITY-INP">
                            </div>
                        </div>
                        <div class="DOB-POB" style="margin: 5px;">
                            <div class="DOB" id="DOB" style="display: none;">
                                <div class="Title extra">
                                    <label for="DateOB">Date of Birth</label>
                                    <button class="dots" onclick="DOBAPP();this.parentNode.parentNode.style.display = 'none';">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"> 
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                    </button>
                                </div>
                                <input data-s="Date of birth" type="date" name="DateOB" size="1" style="outline: none; direction: ltr; height: inherit; font-size: large;" id="dobinput">
                            </div>
                            <div class="POB" id="POB" style="display: none;">
                                <div class="Title extra">
                                    <label for="PlaceOB">Place of Birth</label>
                                    <button class="dots" onclick="POBAPP(); this.parentNode.parentNode.style.display = 'none'; this.parentNode.nextSibling.value = '';">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"> 
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                        </svg>
                                    </button>
                                </div>
                                <input type="text" name="PlaceOB" id="pobinput">
                            </div>
                        </div>
                        <div class="Driver-Liscense input" id="Lisc" style="display: none;">
                            <div class="DLisc extra">
                                <label for="License">Driver's License</label>
                                <button class="dots" onclick="LICAPP(); this.parentNode.parentNode.style.display = 'none'">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"> 
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </button>
                            </div>
                            <input type="text" name="License" id="liscinput">
                        </div>
                        <div class="Gender input" id="Gen" style="display: none;">
                            <div class="extra">
                                <label for="gender">Gender</label>
                                <button class="dots" onclick="GENAPP(); this.parentNode.parentNode.style.display = 'none'">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"> 
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </button>
                            </div>
                            <input type="text" name="gender" id="geninput">
                        </div>
                        <div class="Nationality input" id="Nat" style="display: none;">
                            <div class="extra">
                                <label for="nationality">Nationality</label>
                                <button class="dots" onclick="NATAPP(); this.parentNode.parentNode.style.display = 'none'">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd"
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                                </button>
                            </div>
                            <input type="text" name="nationality" id="natinput">
                        </div>
                        <div class="Civil input" id="Civ" style="display: none;">
                            <div class="extra">
                                <label for="civil-status">Civil Status</label>
                                <button class="dots" onclick="CIVAPP(); this.parentNode.parentNode.style.display = 'none'">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd"
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                                </button>
                            </div>
                            <input type="text" name="civil-status" id="civinput">
                        </div>
                        <div class="Linked input" id="Link" style="display: none;">
                            <div class="extra">
                                <label for="linkin">LinkedIn</label>
                                <button class="dots" onclick="LINKAPP(); this.parentNode.parentNode.style.display = 'none'">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd"
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                                </button>
                            </div>
                            <input type="text" name="linkin" id="linkinput">
                        </div>
                        <div class="Website input" id="Web" style="display: none;">
                            <div class="extra">
                                <label for="website">Website</label>
                                <button class="dots" onclick="WEBAPP(); this.parentNode.parentNode.style.display = 'none'">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash"
                                        viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg>
                                </button>
                            </div>
                            <input type="text" name="website" id="webinput">
                        </div>
                    </div>
                    <div class="optional">
                        <button id="DOB-btn" onclick="DOBAPP(); this.style.display = 'none';">+ Date of Birth</button>
                        <button id="POB-btn" onclick="POBAPP(); this.style.display = 'none';">+ Place of Birth</button>
                        <button id="LIC-btn" onclick="LICAPP(); this.style.display = 'none';">+ Driver's License</button>
                        <button id="GEN-btn" onclick="GENAPP(); this.style.display = 'none';">+ Gender</button>
                        <button id="NAT-btn" onclick="NATAPP(); this.style.display = 'none';">+ Nationality</button>
                        <button id="CIV-btn" onclick="CIVAPP(); this.style.display = 'none';">+ Civil Status</button>
                        <button id="WEB-btn" onclick="WEBAPP(); this.style.display = 'none';">+ Website</button>
                        <button id="LINK-btn" onclick="LINKAPP(); this.style.display = 'none';">+ Linkedin</button>
                    </div>
                </div><hr>
                <div class="first-row">
                    <button class="btn-1" onclick="Educ();" id="Edu-btn">Education</button>
                    <div style="display: flex;">
                        <div id="edudrop" class="dropdown-content">
                            <a onclick="educlear()">Clear Section</a>
                        </div>
                        <button id="eduoptions" class="btn-2 btn" style="display: none;" onclick="dropedu()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16"> 
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </button>
                        <button onclick="Educ()" class="btn-2" id="btn-22">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="px-0.5 flex-shrink-0 box-content h-6 w-5">
                                <path id="Edu-btn-2" stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <div class="Education child" id="Edu" style="display: none;">
                    <div class="Summary-box" id="edu-summary-box" style="display: none;">
                        <div class="EDUNAME" id="eduname">[Bachelor of Science]</div>
                        <button class="btn-2" id="edit-edubox" onclick="EditEdu()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="box" id="edubox">
                        <div class="education input">
                            <label for="education">Education 1</label>
                            <input id="EDU-title-input" type="text" name="education">
                        </div>
                        <div class="school-city" style="display:flex">
                            <div class="School input">
                                <label for="school">School</label>
                                <input id="School-Name-input" type="text" name="school">
                            </div>
                            <div class="edu-city input">
                                <label for="city">City</label>
                                <input id="City-Name-input" type="text" name="city">
                            </div>
                        </div>
                        <div class="Start-End-date" style="display: flex; margin: 10px; margin-left:0; justify-content: space-evenly;">
                            <div style="display: grid;">
                                <label for="Edu-start">Start Date</label>
                                <input type="month" name="Edu-start" id="EDU-Start-Date">
                            </div>
                            <div style="display: grid;">
                                <label for="Edu-end">End Date</label>
                                <input type="month" name="Edu-end" id="EDU-End-Date">
                            </div>
                        </div>
                        <div class="Desc input">
                            <label for="Description">Description</label>
                            <textarea name="Description" id="Edu-Desc-input" cols="30" rows="10"></textarea>
                        </div>
                        <div style="display: flex; justify-content: flex-end;">
                            <button id="edudone" onclick="DoneEdu()">Done</button>
                        </div>
                    </div>
                    <div class="box" id="edubox2" style="display: none;">
                        <div class="education input">
                            <label for="education">Education 1</label>
                            <input id="EDU-title-input-2" type="text" name="education">
                        </div>
                        <div class="school-city" style="display:flex">
                            <div class="School input">
                                <label for="school">School</label>
                                <input id="School-Name-input-2" type="text" name="school">
                            </div>
                            <div class="edu-city input">
                                <label for="city">City</label>
                                <input id="City-Name-input-2" type="text" name="city">
                            </div>
                        </div>
                        <div class="Start-End-date" style="display: flex; margin: 10px; margin-left:0;">
                            <div class="Start-date input">
                                <label for="Month">Start Date</label>
                                <div class="select">
                                    <select name="Month" id="">
                                        <option value="">Month</option>
                                    </select>
                                    <select name="Year" id="">
                                        <option value="">Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="End-date input">
                                <label for="Month">End Date</label>
                                <div class="select">
                                    <select name="Month" id="">
                                        <option value="">Month</option>
                                    </select>
                                    <select name="Year" id="">
                                        <option value="">Year</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="Desc input">
                            <label for="Description">Description</label>
                            <textarea name="Description" id="Edu-Desc-input-2" cols="30" rows="10"></textarea>
                        </div>
                        <div style="display: flex; justify-content: flex-end;">
                            <button>Done</button>
                        </div>
                    </div> 
                    <!--Education 2-->
                </div><hr>
                <div class="first-row">
                    <button onclick="Emplo()" class="btn-1" id="Empl-btn">Employment</button>
                    <div style="display: flex;">
                        <div id="emplodrop" class="dropdown-content">
                            <a onclick="emploclear()">Clear Section</a>
                        </div>
                        <button id="emploptions" class="btn-2 btn" style="display: none;" onclick="dropemplo()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16"> 
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </button>
                        <button onclick="Emplo()" class="btn-2" id="btn-22">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="px-0.5 flex-shrink-0 box-content h-6 w-5">
                                <path id="Empl-btn-2" stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="Employment child" id="Empl" style="display: none;">
                    <div class="Summary-box" id="emp-summary-box" style="display: none;">
                        <div class="EDUNAME" id="empname"></div>
                        <button class="btn-2" id="edit-edubox" onclick="EditEmp()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                        </button>
                    </div>

                    <div class="box" id="empbox">
                        <div class="Position input">
                            <label for="position">Position</label>
                            <input type="text" name="position" id="EMP-title-input">
                        </div>
                        <div class="Employer-city" style="display: flex;">
                            <div class="Employer input">
                                <label for="employer">Employer</label>
                                <input type="text" name="employer" id="emptype">
                            </div>
                            <div class="emp-city input">
                                <label for="city">City</label>
                                <input type="text" name="emp-city" id="empcity">
                            </div>
                        </div>
                        <div class="Start-End-date" style="display: flex; margin: 10px; margin-left:0; justify-content: space-evenly;">
                            <div style="display: grid;">
                                <label for="Edu-start">Start Date</label>
                                <input type="month" name="emp-Edu-start" id="emp-Date-1">
                            </div>
                            <div style="display: grid;">
                                <label for="Edu-end">End Date</label>
                                <input type="month" name="emp-Edu-end" id="emp-Date-2">
                            </div>
                        </div>
                        <div class="Desc input">
                            <label for="Description">Description</label>
                            <textarea name="emp_Description" id="empdesc" cols="30" rows="10"></textarea>
                        </div>
                        <div style="display: flex; justify-content: flex-end;">
                            <button id="empdone" onclick="DoneEmp()">Done</button>
                        </div>
                    </div>
                </div><hr>
                <div class="first-row">
                    <button onclick="Skls()" class="btn-1" id="Skl-btn">Skills</button>
                    <div style="display: flex;">
                        <div id="skldrop" class="dropdown-content">
                            <a onclick="sklclear()">Clear Section</a>
                        </div>
                        <button id="skloptions" class="btn-2 btn" style="display: none;" onclick="dropskl()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16"> 
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </button>
                        <button onclick="Skls()" class="btn-2" id="btn-22">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="px-0.5 flex-shrink-0 box-content h-6 w-5">
                                <path id="Skl-btn-2" stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="Skills child" id="Skl" style="display: none;">
                    <div class="box">
                        <div class="Skill" style="display: grid;">
                            <label for="skill1">Skill 1</label>
                            <input id="skillname1" type="text" name="skill1" style="width: -webkit-fill-available;">
                        </div>
                        <div class="skill-choice" style="display: flex; align-items: center;">
                            <label for="skill-range">Make a Choice</label>
                            <div style="display: flex; align-items: center;">
                                <input type="range" id="rangeskill1" min="1" max="5" value="1" name="skill1-range">
                                <h6 id="descrange1">Very good</h6>
                            </div>
                        </div>
                    </div>
                    <div class="box" id="box1" style="display: none;">
                        <div class="Skill" style="display: grid;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <label for="skill">Skill 2</label>
                                <button class="dots" onclick="box1();">
                                    <svg xmlns=" http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                                </button>
                            </div>
                            <input id="skillname2" type="text" name="skill2" style="width: -webkit-fill-available;">
                        </div>
                        <div class="skill-choice" style="display: flex; align-items: center;">
                            <label for="skill-range">Make a Choice</label>
                            <div style="display: flex; align-items: center;">
                                <input type="range" id="rangeskill2" min="1" max="5" value="1" name="skill2-range">
                                <h6 id="descrange2">Very good</h6>
                            </div>
                        </div>
                    </div>
                    <div class="box" id="box2" style="display: none;">
                        <div class="Skill" style="display: grid;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <label for="skill">Skill 3</label>
                                <button class="dots" onclick="box2(); this.parentNode.nextSibling.value = '';">
                                    <svg xmlns=" http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                                </button>
                            </div>
                            <input id="skillname3" type="text" name="skill3" style="width: -webkit-fill-available;">
                        </div>
                        <div class="skill-choice" style="display: flex; align-items: center;">
                            <label for="skill-range">Make a Choice</label>
                            <div style="display: flex; align-items: center;">
                                <input type="range" id="rangeskill3" min="1" max="5" value="1" name="skill3-range">
                                <h6 id="descrange3">Very good</h6>
                            </div>
                        </div>
                    </div>
                    <button id="skill1-btn" onclick="box1()">+ Add Skill 2</button>
                    <button id="skill2-btn" onclick="box2()">+ Add Skill 3</button>
                </div><hr>
                <div class="first-row">
                    <button onclick="Langs()" class="btn-1" id="Lang-btn">Languages</button>
                    <div style="display: flex;">
                        <div id="langdrop" class="dropdown-content">
                            <a onclick="langclear()">Clear Section</a>
                        </div>
                        <button id="langoptions" class="btn-2 btn" style="display: none;" onclick="droplang()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16"> 
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </button>
                        <button onclick="Langs()" class="btn-2" id="btn-22">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="px-0.5 flex-shrink-0 box-content h-6 w-5">
                                <path id="Lang-btn-2" stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="Languages child" id="Lang" style="display: none;">
                    <div class="box">
                        <div class="Language" style="display: grid; margin: 5px;">
                            <label for="lang">Language</label>
                            <input type="text" name="lang1" id="langname1"> <!--Language 1 name input-->
                        </div>
                        <div class="lang-choice" style="display: flex; align-items: center;">
                            <label for="lang-range">Make a Choice</label>
                            <div style="display: flex; align-items: center;">
                                <input id="rangelang1" type="range" min="0" max="5" name="lang1-range" value="0"> <!--Language 1 range input-->
                                <h6 id="langdesc1">Very Weak</h6> <!--Language 1 description-->
                            </div>
                        </div>
                    </div>
                    <div class="box" id="langbox1" style="display: none;">
                        <div class="Language" style="display: grid; margin: 5px;">
                            <div style="display: flex; align-items: center; justify-content: space-between;">
                                <label for="lang">Language 2</label>
                                <button class="dots" onclick="langbox1();">
                                    <svg xmlns=" http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                                </button>
                            </div>
                            <input id="langname2" type="text" name="lang2">
                        </div>
                        <div class="lang-choice" style="display: flex; align-items: center;">
                            <label for="lang-range">Make a Choice</label>
                            <div style="display: flex; align-items: center;">
                                <input id="rangelang2" type="range" min="0" max="5" name="lang2-range" value="0">
                                <h6 id="langdesc2">Very Weak</h6>
                            </div>
                        </div>
                    </div>
                    <div class="box" id="langbox2" style="display: none;">
                        <div class="Language" style="display: grid; margin: 5px;">
                            <div style="display: flex; align-items: center; justify-content: space-between;">
                                <label for="lang">Language 3</label>
                                <button class="dots" onclick="langbox2();">
                                    <svg xmlns=" http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>
                                </button>
                            </div>
                            <input id="langname3" type="text" name="lang3">
                        </div>
                        <div class="lang-choice" style="display: flex; align-items: center;">
                            <label for="lang3-range">Make a Choice</label>
                            <div style="display: flex; align-items: center;">
                                <input id="rangelang3" type="range" min="0" max="5" name="lang3-range" value="0">
                                <h6 id="langdesc3">Very Weak</h6>
                            </div>
                        </div>
                    </div>
                    <button id="lang1-btn" onclick="langbox1()">+ Add Language 2</button>
                    <button id="lang2-btn" onclick="langbox2()">+ Add Language 3</button>
                </div><hr>
                <div class="first-row">
                    <button onclick="Hobbs()" class="btn-1" id="Hobb-btn">Hobbies</button>
                    <div style="display: flex;">
                        <div id="hobdrop" class="dropdown-content">
                            <a onclick="hobbyclear()">Clear Section</a>
                        </div>
                        <button id="hobboptions" class="btn-2 btn" style="display: none;" onclick="drophob()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16"> 
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </button>
                        <button onclick="Hobbs()" class="btn-2" id="btn-22">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="px-0.5 flex-shrink-0 box-content h-6 w-5">
                                <path id="Hobb-btn-2" stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="Hobbies child" id="Hobb" style="display: none;">
                    <div class="box">
                        <div class="Hobby">
                            <label for="hobby">Hobby</label>
                            <input id="hobby1" type="text" name="hobby1" style="width: -webkit-fill-available;">
                        </div>
                    </div>
                    <div class="box" id="hobbybox2" style="display: none;">
                        <div style="display: flex; align-items: center; justify-content: space-between;">
                            <label for="hobby">Hobby 2</label>
                            <button class="dots" onclick="hobbybox1();">
                                <svg xmlns=" http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                            </button>
                        </div>
                        <input id="hobby2" type="text" name="hobby2" style="width: -webkit-fill-available;">
                    </div>
                    <div class="box" id="hobbybox3" style="display: none;">
                        <div style="display: flex; align-items: center; justify-content: space-between;">
                            <label for="hobby">Hobby 3</label>
                            <button class="dots" onclick="hobbybox2();">
                                <svg xmlns=" http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>
                            </button>
                        </div>
                        <input id="hobby3" type="text" name="hobby3" style="width: -webkit-fill-available;">
                    </div>
                    <button id="hobby2-btn" onclick="hobbybox1()">+ Add Hobby 2</button>
                    <button id="hobby3-btn" onclick="hobbybox2()">+ Add Hobby 3</button>
                </div><hr>
                <div class="first-row" id="Profile-Title" style="display: none;">
                    <button onclick="Pros()" class="btn-1" id="Pro-btn">Profile</button>
                    <div style="display: flex;">
                        <div id="prodrop" class="dropdown-content">
                            <a onclick="proclear()">Clear Section</a>
                            <a onclick="prodelete()">Delete Section</a>
                        </div>
                        <button id="proptions" class="btn-2 btn" style="display: none;" onclick="droppro()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16"> 
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </button>
                        <button onclick="Pros()" class="btn-2" id="btn-22">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="px-0.5 flex-shrink-0 box-content h-6 w-5">
                                <path id="Pro-btn-2" stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="Profile child" id="Profile" style="display: none;">
                    <div style="display: grid; margin: 10px;">
                        <label for="ProDescription">Description</label>
                        <textarea name="Profile_Description" id="Prodesc" cols="30" rows="10"></textarea>
                    </div>
                </div><hr id="PROHR" style="display: none;">
                <div class="first-row" id="Internship-Title" style="display: none;">
                    <button onclick="Intern()" class="btn-1" id="Int-btn">Internships</button>
                    <div style="display: flex;">
                        <div id="intdrop" class="dropdown-content">
                            <a onclick="intclear()">Clear Section</a>
                            <a onclick="intdelete()">Delete Section</a>
                        </div>
                        <button id="intoptions" class="btn-2 btn" style="display: none;" onclick="dropint()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16"> 
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </button>
                        <button onclick="Intern()" class="btn-2" id="btn-22">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="px-0.5 flex-shrink-0 box-content h-6 w-5">
                                <path id="Int-btn-2" stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="Internships child" id="Internship" style="display: none;">
                    <div class="Summary-box" id="int-summary-box" style="display: none;">
                        <div class="EDUNAME" id="intname"></div>
                        <button class="btn-2" id="edit-intbox" onclick="EditInt()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="box" id="intbox">
                        <div class="Position input">
                            <label for="position">Position</label>
                            <input type="text" name="Internships_position" id="INT-title-input">
                        </div>
                        <div class="Employer-city" style="display: flex;">
                            <div class="Employer input">
                                <label for="employer">Employer</label>
                                <input type="text" name="Internships_employer" id="inttype">
                            </div>
                            <div class="emp-city input">
                                <label for="city">City</label>
                                <input type="text" name="Internships_city" id="intcity">
                            </div>
                        </div>
                        <div class="Start-End-date" style="display: flex; margin: 10px; margin-left:0; justify-content: space-evenly;">
                            <div style="display: grid;">
                                <label for="Edu-start">Start Date</label>
                                <input type="month" name="Internships_Edu_start" id="int-Date-1">
                            </div>
                            <div style="display: grid;">
                                <label for="Edu-end">End Date</label>
                                <input type="month" name="Internships_Edu_end" id="int-Date-2">
                            </div>
                        </div>
                        <div class="Desc input">
                            <label for="Description">Description</label>
                            <textarea name="Internships_Description" id="intdesc" cols="30" rows="10"></textarea>
                        </div>
                        <div style="display: flex; justify-content: flex-end;">
                            <button id="intdone" onclick="DoneInt()">Done</button>
                        </div>
                    </div>
                </div><hr id="INTHR" style="display: none;">
                <div class="first-row" id="Extra-Title" style="display: none;">
                    <button onclick="ExtraC()" class="btn-1" id="Extra-btn" style="width: -webkit-fill-available;">Extracurricular Activities</button>
                    <div style="display: flex;">
                        <div id="extdrop" class="dropdown-content">
                            <a onclick="extclear()">Clear Section</a>
                            <a onclick="extdelete()">Delete Section</a>
                        </div>
                        <button id="extoptions" class="btn-2 btn" style="display: none;" onclick="dropext()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16"> 
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </button>
                        <button onclick="ExtraC()" class="btn-2" id="btn-22">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="px-0.5 flex-shrink-0 box-content h-6 w-5">
                                <path id="Extra-btn-2" stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="Extracurricular child" id="Extracurricular" style="display: none;">
                    <div class="Summary-box" id="ext-summary-box" style="display: none;">
                        <div class="EDUNAME" id="extname"></div>
                        <button class="btn-2" id="edit-extbox" onclick="EditExt()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="box" id="extbox">
                        <div class="Position input">
                            <label for="position">Position</label>
                            <input type="text" name="extra_position" id="EXT-title-input">
                        </div>
                        <div class="Employer-city" style="display: flex;">
                            <div class="Employer input">
                                <label for="employer">Employer</label>
                                <input type="text" name="extra_employer" id="exttype">
                            </div>
                            <div class="emp-city input">
                                <label for="city">City</label>
                                <input type="text" name="extra_city" id="extcity">
                            </div>
                        </div>
                        <div class="Start-End-date" style="display: flex; margin: 10px; margin-left:0; justify-content: space-evenly;">
                            <div style="display: grid;">
                                <label for="Edu-start">Start Date</label>
                                <input type="month" name="extra_Edu_start" id="ext-Date-1">
                            </div>
                            <div style="display: grid;">
                                <label for="extra_Edu_end">End Date</label>
                                <input type="month" name="extra_Edu_end" id="ext-Date-2">
                            </div>
                        </div>
                        <div class="Desc input">
                            <label for="Description">Description</label>
                            <textarea name="extra_Description" id="extdesc" cols="30" rows="10"></textarea>
                        </div>
                        <div style="display: flex; justify-content: flex-end;">
                            <button id="extdone" onclick="DoneExt()">Done</button>
                        </div>
                    </div>
                </div><hr id="EXTHR" style="display: none;">
                <div class="first-row" id="Achievement-Title" style="display: none;">
                    <button onclick="Achvt()" class="btn-1" id="Pro-btn">Achievements</button>
                    <div style="display: flex;">
                        <div id="achvdrop" class="dropdown-content">
                            <a onclick="achvclear()">Clear Section</a>
                            <a onclick="achvdelete()">Delete Section</a>
                        </div>
                        <button id="achoptions" class="btn-2 btn" style="display: none;" onclick="dropachv()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16"> 
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </button>
                        <button onclick="Achvt()" class="btn-2" id="btn-22">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="px-0.5 flex-shrink-0 box-content h-6 w-5">
                                <path id="Achv-btn-2" stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="Achievements child" id="Achievement" style="display: none;">
                    <div style="display: grid; margin: 10px;">
                        <label for="AchvDescription">Description</label>
                        <textarea name="AchvDescription" id="Achvdesc" cols="30" rows="10"></textarea>
                    </div>
                </div><hr id="ACHHR" style="display: none;">
                <div class="first-row" id="Certificate-Title" style="display: none;">
                    <button onclick="Cert()" class="btn-1" id="Cert-btn">Certificates</button>
                    <div style="display: flex;">
                        <div id="certdrop" class="dropdown-content">
                            <a onclick="certclear()">Clear Section</a>
                            <a onclick="certdelete()">Delete Section</a>
                        </div>
                        <button id="certoptions" class="btn-2 btn" style="display: none;" onclick="dropcert()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16"> 
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                            </svg>
                        </button>
                        <button onclick="Cert()" class="btn-2" id="btn-22">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="px-0.5 flex-shrink-0 box-content h-6 w-5">
                                <path id="Cert-btn-2" stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="Certificates child" id="Certificate" style="display: none;">
                    <div class="Summary-box" id="cert-summary-box" style="display: none;">
                        <div class="EDUNAME" id="certname"></div>
                        <button class="btn-2" id="edit-edubox" onclick="EditCert()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="box" id="certbox">
                        <div class="Position input">
                            <label for="position">Certificate</label>
                            <input type="text" name="Certificate_position" id="CERT-title-input">
                        </div>
                        <div class="Start-End-date" style="display: flex; margin: 10px; margin-left:0; justify-content: flex-start;">
                            <div style="display: grid;">
                                <label for="Cert-end">Period</label>
                                <input type="month" name="Certificate_end" id="cert-Date">
                            </div>
                        </div>
                        <div class="Desc input">
                            <label for="Description">Description</label>
                            <textarea name="Certificate_Description" id="certdesc" cols="30" rows="10"></textarea>
                        </div>
                        <div style="display: flex; justify-content: flex-end;">
                            <button id="certdone" onclick="DoneCert()">Done</button>
                        </div>
                    </div>
                </div><hr id="CERHR" style="display: none;">
                <div class="buttons">
                    <button id="PROBTN" onclick="PROBTN1()">+ Profile</button>
                    <button id="INTBTN" onclick="INTBTN1()">+ Internships</button>
                    <button id="EXTBTN" onclick="EXTBTN1()">+ Extracurricular Activities</button>
                    <button id="ACHVBTN" onclick="ACHBTN1()">+ Achievements</button>
                    <button id="CERTBTN" onclick="CERTBTN1()">+ Certificates</button>
                </div>
                <hr id="FINAL-HR">
            </div>
        </form>
        <section class="Right-side" id="RightSide">
            <div class="container" id="CONTAINER">
                <div class="right-column"></div>
                <div class="header">
                    <div class="header-container">
                        <div class="PHOTO-FLNAME">
                            <div class="PICTURE">
                                <img id="image2"
                                    src="https://i1.wp.com/www.slntechnologies.com/wp-content/uploads/2017/08/ef3-placeholder-image.jpg?ssl=1"
                                    alt="">
                            </div>
                            <div class="F-L-Name">
                                <div class="names">
                                    <div id="fname">Omar &nbsp;</div>
                                    <div id="second">Fatfat</div>
                                </div>
                                <div class="headline" id="headline">Web Developer and computer Scientist</div>
                            </div>
                        </div>
                        <div class="banners-div">
                            <div class="banners"></div>
                            <div class="banners main contact">Contact</div>
                        </div>
                        <div class="details-container">
                            <div class="details">
                                <div id="phone">76 056 804</div>
                                <div id="city">Beirut , Aramoun</div>
                                <div id="pcode">12 34 56 78 90 12</div>
                            </div>
                            <div class="details">
                                <div id="mail">bl20omar03ck@gmail.com</div>
                                <div id="address">Aramoun Arab Street Halabi Building</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Body">
                    <div class="left-body">
        
                        <div class="Education-output" id="EDU-title">
        
                            <div class="banners-div">
        
                                <div class="banners"></div>
                                <div class="banners main education">Education</div>
                            </div>
                            <h4 id="EDU-title">Education</h4>
        
                            <div class="Fixed-education">
                                <div class="Headers">
                                    <h5 id="EDU-Name">Education Title</h5>
                                    <div class="Sch-Cit-Date">
                                        <div class="SCNAME">
                                            <h5 id="School-Name">School Name</h5>
                                            <h5 id="City-Name">City Name</h5>
                                        </div>
                                        <h6 id="Education-Date-Output">From &nbsp;<div id="EDU-Date-1">X</div>&nbsp;to&nbsp;<div
                                                id="EDU-Date-2">Y</div>
                                        </h6>
                                    </div>
                                </div>
                                <div id="Edu-Desc" class="edu desc">
                                    It was a very nice education I graduated an expert in english and science and it was
                                    temporary for my success right now. It tought me alot of things that help me right now not
                                    only in my work but my real life also
                                </div>
                            </div>
                        </div>
        
                        <div class="Employment-output" id="EMP-title">
        
                            <div class="banners-div">
        
                                <div class="banners"></div>
                                <div class="banners main education">Employment</div>
                            </div>
                            <h4 id="EMP-title">Employment</h4>
        
                            <div class="Fixed-education">
                                <div class="Headers">
                                    <h5 id="EMP-Name">Employment Title</h5>
                                    <div class="Sch-Cit-Date">
                                        <div class="SCNAME">
                                            <h5 id="Employment-Name">Employment Name</h5>
                                            <h5 id="City-Employment">City of Employment</h5>
                                        </div>
                                        <h6 id="Employment-Date-Output">From &nbsp;<div id="EMP-Date-1" class="empdate">X</div>
                                            &nbsp; to &nbsp;<div id="EMP-Date-2" class="empdate">Y</div>
                                        </h6>
                                    </div>
                                </div>
                                <div id="EMP-Desc" class="EMP desc">
                                    It was a very nice education I graduated an expert in english and science and it was
                                    temporary for my success right now. It tought me alot of things that help me right now not
                                    only in my work but my real life also
                                </div>
                            </div>
                        </div>
        
        
                        <div class="Profile-output" id="PRO-title">
        
                            <div class="banners-div">
        
                                <div class="banners"></div>
                                <div class="banners main profile-banner">Profile</div>
                            </div>
                            <h4 id="PRO-title">Profile</h4>
        
                            <div id="prodescout" class="Fixed-education">Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit. Ex dignissimos at ad molestiae error magni porro ratione odio dolorem labore explicabo,
                                perspiciatis exercitationem sapiente! Perferendis porro temporibus in quaerat corrupti?</div>
                        </div>
        
                        <div class="Internship-output" id="INT-title">
        
                            <div class="banners-div">
        
                                <div class="banners"></div>
                                <div class="banners main education">Internship</div>
                            </div>
                            <h4 id="INT-title">Internship</h4>
        
                            <div class="Fixed-education">
                                <div class="Headers">
                                    <h5 id="INT-Name">Internship Title</h5>
                                    <div class="Sch-Cit-Date">
                                        <div class="SCNAME">
                                            <h5 id="Internship-Name">Internship Name</h5>
                                            <h5 id="City-Internship">City of Internship</h5>
                                        </div>
                                        <h6 id="Internship-Date-Output">From &nbsp;<div id="INT-Date-1" class="empdate">X</div>
                                            &nbsp; to &nbsp;<div id="INT-Date-2" class="empdate">Y</div>
                                        </h6>
                                    </div>
                                </div>
                                <div id="INT-Desc" class="EMP desc">
                                    It was a very nice education I graduated an expert in english and science and it was
                                    temporary for my success right now. It tought me alot of things that help me right now not
                                    only in my work but my real life also
                                </div>
                            </div>
                        </div>
                        <div class="Extra-output" id="EXT-title">
        
                            <div class="banners-div">
        
                                <div class="banners"></div>
                                <div class="banners main education">Extracurricular Activity</div>
                            </div>
                            <h4 id="EXT-title">Extracurricular Activity</h4>
        
                            <div class="Fixed-education">
                                <div class="Headers">
                                    <h5 id="EXT-Name">Extracurricular Activity Title</h5>
                                    <div class="Sch-Cit-Date">
                                        <div class="SCNAME">
                                            <h5 id="Extra-Name">Activity Name</h5>
                                            <h5 id="City-Extra">City of Activity</h5>
                                        </div>
                                        <h6 id="Extra-Date-Output">From &nbsp;<div id="EXT-Date-1" class="empdate">X</div>&nbsp;
                                            to &nbsp;<div id="EXT-Date-2" class="empdate">Y</div>
                                        </h6>
                                    </div>
                                </div>
                                <div id="EXT-Desc" class="EMP desc">
                                    It was a very nice education I graduated an expert in english and science and it was
                                    temporary for my success right now. It tought me alot of things that help me right now not
                                    only in my work but my real life also
                                </div>
                            </div>
                        </div>
                        <div class="Achievement-output" id="ACHV-title">
        
                            <div class="banners-div">
        
                                <div class="banners"></div>
                                <div class="banners main education">Achievement</div>
                            </div>
                            <h4 id="ACHV-title">Achievement</h4>
        
                            <div id="achvdescout" class="Fixed-education">Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit. Ex dignissimos at ad molestiae error magni porro ratione odio dolorem labore explicabo,
                                perspiciatis exercitationem sapiente! Perferendis porro temporibus in quaerat corrupti?</div>
                        </div>
                        <div class="Certificate-output" id="CERT-title">
        
                            <div class="banners-div">
        
                                <div class="banners"></div>
                                <div class="banners main education">Certificates</div>
                            </div>
                            <h4 id="CERT-title">Certificates</h4>
        
                            <div id="cert-date-name">
                                <div id="certnameout" class="Fixed-education">Certificate X</div>
                                <div id="certdate" class="Fixed-education">2021018802-22-2-2</div>
                            </div>
                            <div id="certdescout" class="Fixed-education">Lorem ipsum, dolor sit amet consectetur adipisicing
                                elit. Ex
                                dignissimos at ad molestiae error magni porro ratione odio dolorem labore explicabo,
                                perspiciatis exercitationem
                                sapiente! Perferendis porro temporibus in quaerat corrupti?</div>
                        </div>
                    </div>
                    <hr>
        
        
        
        
        
        
                    <div class="right-body" id="rightbody">
                        <h4 id="PDtitle" style="display: initial;">Personal Details</h4>
        
        
                        <div id="PDtitle1" style="display: flex;" class="banners-div details-content">
                            <div class="banners"></div>
                            <div class="banners main personal">Personal details</div>
                        </div>
                        <div class="p-details-output">
        
                            <div class="details-content">
                                <div class="title-output">
                                    <div class="DOB title">Date of Birth</div>
                                    <div class="DOB output" id="doboutput">20/5/2003</div>
                                </div>
                                <div class="title-output">
                                    <div class="POB title">Place of Birth</div>
                                    <div class="POB output" id="poboutput">Tripoli,Sir</div>
                                </div>
                                <div class="title-output">
                                    <div class="Lisc title">Driver's Liscense</div>
                                    <div class="Lisc output" id="liscoutput">American Liscense</div>
                                </div>
                                <div class="title-output">
                                    <div class="Link title">Linkedin Account</div>
                                    <div class="Link output" id="linkoutput">Linkedin account</div>
                                </div>
                                <div class="title-output">
                                    <div class="Web title">Website</div>
                                    <div class="Web output" id="weboutput">www.whateverwebsite.com</div>
                                </div>
                            </div>
                            <div class="details-content">
        
                                <div class="title-output">
                                    <div class="Gen title">Gender</div>
                                    <div class="Gen output" id="genoutput">Male</div>
                                </div>
                                <div class="title-output">
                                    <div class="Nat title">Nationality</div>
                                    <div class="Nat output" id="natoutput">Lebanese</div>
                                </div>
                                <div class="title-output">
                                    <div class="Civ title">Civil Status</div>
                                    <div class="Civ output" id="civoutput">Clean</div>
                                </div>
                            </div>
                        </div>
                        <div class="skills-output Hobbies">
                            <h4 class="HEADTITLE" style="display: initial;" id="SKILLTITLE">Skills</h4>
        
                            <div id="SKILLTITLE1" class="banners-div details-content">
                                <div class="banners"></div>
                                <div class="banners main skills">Skills</div>
                            </div>
        
        
        
                            <div class="title-output" id="skillparent1">
                                <div class="title" id="Skilltitle1">Skill 1</div>
                                <div class="skill output">
                                    <div id="skillrange1" class="range"></div>
                                </div>
                            </div>
                            <div class="title-output" id="skillparent2">
                                <div class="title" id="Skilltitle2">Skill 2</div>
                                <div class="skill output">
                                    <div id="skillrange2" class="range"></div>
                                </div>
                            </div>
                            <div class="title-output" id="skillparent3">
                                <div class="title" id="Skilltitle3">Skill 3</div>
                                <div class="skill output">
                                    <div id="skillrange3" class="range"></div>
                                </div>
                            </div>
                        </div>
                        <div class="LANGUAGE skills-output Hobbies">
                            <h4 class="HEADTITLE" style="display: initial;" id="LANGTITLE">Languages</h4>
        
                            <div id="LANGTITLE1" class="banners-div details-content">
                                <div class="banners"></div>
                                <div class="banners main language">Language</div>
                            </div>
                            <div class="title-output" id="langparent1">
                                <div class="title" id="Langtitle1">Language 1</div> <!--Language 1 output-->
                                <div class="skill output">
                                    <div id="langrange1" class="range"></div> <!--Language 1 range output-->
                                </div>
                            </div>
                            <div class="title-output" id="langparent2">
                                <div class="title" id="Langtitle2">Language 2</div>
                                <div class="skill output">
                                    <div id="langrange2" class="range"></div>
                                </div>
                            </div>
                            <div class="title-output" id="langparent3">
                                <div class="title" id="Langtitle3">Language 3</div>
                                <div class="skill output">
                                    <div id="langrange3" class="range"></div>
                                </div>
                            </div>
                        </div>
                        <div class="Hobbies">
                            <h4 class="HEADTITLE" style="display: initial;" id="HOBBTITLE">Hobbies</h4>
        
                            <div id="HOBBTITLE1" class="banners-div details-content">
                                <div class="banners"></div>
                                <div class="banners main Hobbies">Hobbies</div>
                            </div>
        
                            <ol class="title list" style="list-style: none;">
                                <li id="Hobby1">Hobby 1</li>
                                <li id="Hobby2">Hobby 2</li>
                                <li id="Hobby3">Hobby 3</li>
                            </ol>
                        </div>
                    </div>
                </div>
        
        
        </section>
    </section>

    <script src="script.js"></script>
    <script src="template.js"></script>
    <!-- <script src="query.js"></script> -->
    <script>
        $(document).on('click', 'button','svg', function(e) {
            e.preventDefault(); // Prevent from submitting form. 
        });
    </script>
</body>
</html>