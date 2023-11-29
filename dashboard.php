<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href='https://fonts.googleapis.com/css?family=Source Serif Pro' rel='stylesheet'>
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>
    
    <div class="kiri">
        <a href="index.php">    
        <img src="assets/aot-logo.png" alt="aot">
        </a>
        <button id="btn1" class="active"> <img src="assets/settingicon.png" alt="icon"> Setting</button>
        <button id="btn2"> <img src="assets/tlicon.png" alt="icon"> Timeline</button>
        <button id="btn3"> <img src="assets/deathicon.png" alt="icon"> Death</button>
        <button id="btn4"> <img src="assets/usericon.png" alt="icon"> User</button>

        <button id="logout"><img src="assets/logouticon.png" alt="icon">Logout</button>
    </div>

    <div class="atas">
        <h1 id="header">Setting</h1>
        <img src="assets/Vector.png" alt="">
        <p class="username">Jehian Athaya</p>
        <p class="role">Eldian</p>
    </div>

    <div class="content1" id="content-1">
        <form method="post">
            <div class="form-group">

                <div class="input-group-avatar">
                    <p>Change Avatar</p>
                    <img src="assets/Vector.png" alt="">
                </div>

                <div class="input-group-2">
                    <label for="avatarUpload" class="file-upload-button">Choose Image</label>
                    <input type="file" id="avatarUpload" class="avatar-upload" accept=".png, .jpg, .jpeg" style="display: none;">
                </div>

                <div class="input-group-nick">
                    <p>Nickname</p>
                    <input type="text" name="nickname" value="jehath">
                </div>
                
                <div class="input-group-name">
                    <p>Name</p>
                    <input type="text" name="name" value="Jehian Athaya">
                </div>

                <div class="input-group-pw">
                    <p>Password</p>
                    <input type="password" name="password" value="12345">
                </div>

                <input type="submit" value="Edit Data">
            </div>
        </form>
    </div>

    <div class="content2" id="content-2">
        <button id="leftbutton2"> <img src="assets/addicon.png" alt="icon"> Add Data</button>
        <div class="time-select" style="width:100px;">
            <select name="" id="">
                <option value="0">Time</option>
                <option value="1">Day 1</option>
                <option value="2">Day 2</option>
                <option value="3">Day 3</option>
                <option value="4">Day 4</option>
            </select>
        </div>
        <input type="search" id="searchBar" placeholder="Search...">

        <table id="contentTable">

            <tr>
                <th>No</th>
                <th>Place</th>
                <th>Time</th>
                <th>Action</th>
            </tr>

            <tr>
                <td>1.</td>
                <td>Mitras, Paradise</td>
                <td>Day 1</td>
                <td>
                    <img src="assets/detailicon.png" name="detailtimeline" alt="icon" class="action-img">
                    <img src="assets/editicon.png"  name="edittimeline" alt="icon" class="action-img">
                    <img src="assets/deleteicon.png" name="deletetimeline" alt="icon" class="action-img">
                </td>
            </tr>

        </table>
    </div>

    <div class="content2-1" id="content-2-1">
        <form method="post">
            <div class="form-group">

                <div class="input-group-place">
                    <p>Place</p>
                    <input type="text" name="place">
                </div>
                
                <div class="input-group-detail">
                    <p>Detail</p>
                    <textarea name="detail" id="detail" cols="30" rows="7"></textarea>
                </div>

                <div class="input-group-time">
                    <p>Time</p>
                    <input type="text" name="time">
                </div>

                <div class="input-group-image">
                    <p>Image</p>
                    <label for="timelineUpload" class="timeline-upload-button">Choose Image</label>
                    <input type="file" id="timelineUpload" class="timeline-upload" name="timelineimg" accept=".png, .jpg, .jpeg" style="display: none;">
                </div>

                <input type="submit" value="Add Data">
            </div>
        </form>
    </div>

    <div class="content2-2" id="content-2-2">
        <form method="post">
            <div class="form-group">

                <div class="input-group-place">
                    <p>Place</p>
                    <input type="text" name="place" value="Mitras, Paradise">
                </div>
                
                <div class="input-group-detail">
                    <p>Detail</p>
                    <textarea name="detail" id="detail" cols="30" rows="7">Mitras is the opulent capital city and center of power within Wall Sina, where nobles and aristocrats enjoy extravagant wealth detached from commoners struggling daily against the Titan threat outside.</textarea>
                </div>

                <div class="input-group-time">
                    <p>Time</p>
                    <input type="text" name="time" value="Day 1">
                </div>

                <div class="input-group-image">
                    <p>Image</p>
                    <label for="timelineUpload" class="timeline-upload-button">Choose Image</label>
                    <input type="file" id="timelineUpload" class="timeline-upload" name="timelineimg" accept=".png, .jpg, .jpeg" style="display: none;">
                </div>

                <input type="submit" value="Edit Data">
            </div>
        </form>
    </div>

    <div class="content2-3" id="content-2-3">
        <img src="assets/day1.png" alt="">
        <span class="time-detail">Time : Day 1</span>
        <span class="undiscovered-dead">Undiscovered Dead : 83</span>
        <h1>Mitras, Paradis</h1>
        <p>Mitras is the opulent capital city and center of power within Wall Sina, where nobles and aristocrats enjoy extravagant wealth detached from commoners struggling daily against the Titan threat outside.</p>
    </div>

    <div class="content3" id="content-3">
        <button id="leftbutton3"> <img src="assets/addicon.png" alt="icon"> Add Data</button>

        <div class="timeline-select3" style="width:200px;">
            <select name="" id="">
                <option value="0">Timeline</option>
                <option value="1">Mitras, Paradis</option>
                <option value="2">Karifa, Marley</option>
                <option value="3">Liberio, Marley</option>
                <option value="4">Salmud, Marley</option>
                <option value="5">Odiha, Marley</option>
                <option value="6">Marley Ravine</option>
                <option value="7">Fort Salta, Marley</option>
            </select>
        </div>
        <input type="search" id="searchBar3" placeholder="Search...">

        <table id="contentTable">

            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Timeline</th>
                <th>Cause</th>
                <th>Action</th>
            </tr>

            <tr>
                <td>1.</td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <img src="assets/detailicon.png" name="detaildeath" alt="icon" class="action-img">
                    <img src="assets/editicon.png"  name="editdeath" alt="icon" class="action-img">
                    <img src="assets/deleteicon.png" name="deletedeath" alt="icon" class="action-img">
                </td>
            </tr>

        </table>
    </div>

    <div class="content3-1" id="content-3-1">
        <form method="post">
            <div class="form-group3">

                <div class="input-group-name">
                    <p>Name</p>
                    <div class="name-select" style="width:360px;">
                        <select name="" id="">
                            <option value="0">Rest In Peace</option>
                            <option value="1">Eren Yeager</option>
                            <option value="2">Mikasa Ackerman</option>
                            <option value="3">Armin Arlert</option>
                            <option value="4">Levi Ackerman</option>
                            <option value="5">Zeke Yeager</option>
                            <option value="6">Sasha Braun</option>
                            <option value="7">Hange Zoe</option>
                            <option value="8">Erwin Smith</option>
                        </select>
                    </div>
                </div>
                
                <div class="input-group-timeline">
                    <p>Timeline</p>
                    <div class="timeline-select3-1" style="width:360px;">
                        <select name="" id="">
                            <option value="0">Select Timeline</option>
                            <option value="1">Mitras, Paradis</option>
                            <option value="2">Karifa, Marley</option>
                            <option value="3">Liberio, Marley</option>
                            <option value="4">Salmud, Marley</option>
                            <option value="5">Odiha, Marley</option>
                            <option value="6">Marley Ravine</option>
                            <option value="7">Fort Salta, Marley</option>
                        </select>
                    </div>
                </div>

                <div class="input-group-image">
                    <p>Image</p>
                    <label for="deathUpload" class="death-upload-button">Choose Image</label>
                    <input type="file" id="deathUpload" class="death-upload" name="deathimg" accept=".png, .jpg, .jpeg" style="display: none;">
                </div>

                <div class="input-group-cause">
                    <p>Cause</p>
                    <input type="text" name="cause">
                </div>

                <input type="submit" value="Add Data">
            </div>
        </form>
    </div>

    <div class="content3-2" id="content-3-2">
        <form method="post">
            <div class="form-group3-2">

                <div class="input-group-name">
                    <p>Name</p>
                    <div class="name-select" style="width:360px;">
                        <select name="" id="">
                            <option value="0">Rest In Peace</option>
                            <option value="1">Eren Yeager</option>
                            <option value="2">Mikasa Ackerman</option>
                            <option value="3">Armin Arlert</option>
                            <option value="4">Levi Ackerman</option>
                            <option value="5">Zeke Yeager</option>
                            <option value="6">Sasha Braun</option>
                            <option value="7">Hange Zoe</option>
                            <option value="8">Erwin Smith</option>
                        </select>
                    </div>
                </div>
                
                <div class="input-group-timeline">
                    <p>Timeline</p>
                    <div class="timeline-select3-1" style="width:360px;">
                        <select name="" id="">
                            <option value="0">Select Timeline</option>
                            <option value="1">Mitras, Paradis</option>
                            <option value="2">Karifa, Marley</option>
                            <option value="3">Liberio, Marley</option>
                            <option value="4">Salmud, Marley</option>
                            <option value="5">Odiha, Marley</option>
                            <option value="6">Marley Ravine</option>
                            <option value="7">Fort Salta, Marley</option>
                        </select>
                    </div>
                </div>

                <div class="input-group-image">
                    <p>Image</p>
                    <label for="deathUpload" class="death-upload-button">Choose Image</label>
                    <input type="file" id="deathUpload" class="death-upload" name="deathimg" accept=".png, .jpg, .jpeg" style="display: none;">
                </div>

                <div class="input-group-cause">
                    <p>Cause</p>
                    <input type="text" name="cause">
                </div>

                <input type="submit" value="Edit Data">
            </div>
        </form>
    </div>

    <div class="content3-3" id="content-3-3">

    </div>

    <div class="content4" id="content-4">
        <button id="leftbutton4"> <img src="assets/addicon.png" alt="icon"> Add Data</button>

        <div class="fraeth-select-4" style="width:200px;">
                <select name="" id="">
                <option value="0">Fraction - Ethnic</option>
                <option value="1">Yeagerist - Eldian</option>
                <option value="2">Alliance - Eldian</option>
                <option value="3">Alliance - Marley</option>
                <option value="4">Warrior - Marley</option>
                <option value="5">Anti Marleyan - Marley</option>
                <option value="6">Military - Eldian</option>
                <option value="7">Military - Marley</option>
                <option value="8">Civil - Eldian</option>
                <option value="9">Civil - Marley</option>
            </select>
        </div>

        <div class="status-select-4" style="width:100px;">
            <select name="" id="">
                <option value="0">Status</option>
                <option value="1">Alive</option>
                <option value="2">Dead</option>
            </select>
        </div>
        <input type="search" id="searchBar4" placeholder="Search...">

        <table id="contentTable">

            <tr>
                <th>No</th>
                <th>Avatar</th>
                <th>Name</th>
                <th>Fraction - Ethnic</th>
                <th>Status</th>
                <th>Action</th>
            </tr>

            <tr>
                <td>1.</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <img src="assets/editicon.png"  name="edituser" alt="icon" class="action-img">
                    <img src="assets/deleteicon.png" name="deleteuser" alt="icon" class="action-img">
                </td>
            </tr>

        </table>
    </div>

    <div class="content4-1" id="content-4-1">
        <form method="post">
            <div class="form-group">

                <div class="input-group-avatar">
                    <p>Select Avatar</p>
                    <img src="assets/Vector.png" alt="">
                </div>

                <div class="input-group-2">
                    <label for="avatarUpload" class="file-upload-button">Choose Image</label>
                    <input type="file" id="avatarUpload" class="avatar-upload" accept=".png, .jpg, .jpeg" style="display: none;">
                </div>

                <div class="input-group-name">
                    <p>Name</p>
                    <input type="text" name="name">
                </div>

                <div class="input-group-nick">
                    <p>Nickname</p>
                    <input type="text" name="nickname">
                </div>
                
                <div class="input-group-fraeth">
                    <p>Fraction - Ethnic</p>
                    <div class="fraeth-select-4-1" style="width:363px;">
                        <select name="" id="">
                            <option value="0">Choose One</option>
                            <option value="1">Yeagerist - Eldian</option>
                            <option value="2">Alliance - Eldian</option>
                            <option value="3">Alliance - Marley</option>
                            <option value="4">Warrior - Marley</option>
                            <option value="5">Anti Marleyan - Marley</option>
                            <option value="6">Military - Eldian</option>
                            <option value="7">Military - Marley</option>
                            <option value="8">Civil - Eldian</option>
                            <option value="9">Civil - Marley</option>
                        </select>
                    </div>
                </div>

                <div class="input-group-status">
                    <p>Status</p>
                    <div class="status-select-4-1" style="width:363px;">
                        <select name="" id="">
                            <option value="0">Choose One</option>
                            <option value="1">Alive</option>
                            <option value="2">Dead</option>
                        </select>
                    </div>
                </div>

                <input type="submit" value="Add Data">
            </div>
        </form>
    </div>

    <div class="content4-2" id="content-4-2">
        <form method="post">
            <div class="form-group">

                <div class="input-group-avatar">
                    <p>Change Avatar</p>
                    <img src="assets/Vector.png" alt="">
                </div>

                <div class="input-group-2">
                    <label for="avatarUpload" class="file-upload-button">Choose Image</label>
                    <input type="file" id="avatarUpload" class="avatar-upload" accept=".png, .jpg, .jpeg" style="display: none;">
                </div>

                <div class="input-group-name">
                    <p>Name</p>
                    <input type="text" name="name" value="Jehian Athaya">
                </div>

                <div class="input-group-nick">
                    <p>Nickname</p>
                    <input type="text" name="nickname" value="jehath">
                </div>
                
                <div class="input-group-fraeth">
                    <p>Fraction - Ethnic</p>
                    <div class="fraeth-select-4-1" style="width:363px;">
                        <select name="" id="">
                            <option value="0">Choose One</option>
                            <option value="1">Yeagerist - Eldian</option>
                            <option value="2">Alliance - Eldian</option>
                            <option value="3">Alliance - Marley</option>
                            <option value="4">Warrior - Marley</option>
                            <option value="5">Anti Marleyan - Marley</option>
                            <option value="6">Military - Eldian</option>
                            <option value="7">Military - Marley</option>
                            <option value="8">Civil - Eldian</option>
                            <option value="9">Civil - Marley</option>
                        </select>
                    </div>
                </div>

                <div class="input-group-status">
                    <p>Status</p>
                    <div class="status-select-4-1" style="width:363px;">
                        <select name="" id="">
                            <option value="0">Choose One</option>
                            <option value="1">Alive</option>
                            <option value="2">Dead</option>
                        </select>
                    </div>
                </div>

                <input type="submit" value="Edit Data">
            </div>
        </form>
    </div>

    <script src="js/dashboard.js"> </script>
</body>
</html>