
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WMSU ADMINISTRATION</title>



<body>
    <?php require_once '../__includes/navbar.php'; ?>
    <?php require_once '../__includes/head.php'; ?>
    
    <!-- Main Content with side margins -->
    <div class="container">
        <div class="left-margin"></div>
        
        <div class="content-area">
            <h1 class="administration-title">ADMINISTRATION</h1>
            
            <div class="board-title">Board of Regents</div>
            
            <div class="board-grid">
            <?php
require_once '../classes/bor.class.php';

$bor = new Board();
$boardMembers = $bor->fetchAll(); // Fetch all board members

foreach ($boardMembers as $member) {
    echo '<div class="board-member">';
    echo '    <div class="member-image">';
    echo '        <img src="images/' . htmlspecialchars($member['image']) . '" alt="' . htmlspecialchars($member['name']) . '" width="200px">';
    echo '    </div>';
    echo '    <div class="member-info">';
    echo '        <div class="member-name">' . htmlspecialchars($member['name']) . '</div>';
    echo '        <div class="member-title">' . htmlspecialchars($member['title']) . '</div>';
    
    if (!empty($member['link_to_office'])) {
        echo '        <a href="' . htmlspecialchars($member['link_to_office']) . '" class="Offices">Office of the President</a>';
    }
    
    echo '    </div>';
    echo '</div>';
}
?>
            </div>
            <div class="board-title">Administrative Officials</div>


            <div class="title-row">
            <div class="position-title">President - </div>
            </div>

            <div class="official-row">
    <?php
    require_once '../classes/pres.class.php';

    $pres = new Pres();
    $PresOfficials = $pres->fetchAll(); // Fetch all officials

    foreach ($PresOfficials as $Presofficial) {
        echo '<div class="official-name">';
        echo '<h3>' . htmlspecialchars($Presofficial['name']) . '</h3>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($Presofficial['title']) . '</p>';
        
        if (!empty($Presofficial['page_link'])) {
            echo '<a href="' . htmlspecialchars($Presofficial['page_link']) . '" class="Offices">Office of the President</a>';
        }
        
        echo '</div>';
    }
    ?>
</div>


        <!-- Vice Presidents -->
        <div class="position-title">Vice Presidents</div>
        <?php
    require_once '../classes/Vicepres.class.php';

    $vicePres = new VicePres();
    $VicePresOfficials = $vicePres->fetchAll(); // Fetch all officials

    foreach ($VicePresOfficials as $VicePresofficial) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<h3>' . htmlspecialchars($VicePresofficial['name']) . '</h3>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($VicePresofficial['title']) . '</p>';
        
        if (!empty($VicePresofficial['page_link'])) {
            echo '<a href="' . htmlspecialchars($VicePresofficial['page_link']) . '" class="Offices">Office of the Vice President</a>';
        }
        
        echo '</div>';
        echo '</div>';
    }
    ?>



        <!-- Office of the President Staff -->
        <div class="position-title">Office of the President Staff</div>
        <?php
    require_once '../classes/opstaff.class.php';

    $opstaffobj = new OpStaff();
    $opstaff = $opstaffobj->fetchAll(); // Fetch all officials

    foreach ($opstaff as $opstaffs) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<h3>' . htmlspecialchars($opstaffs['name']) . '</h3>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($opstaffs['title']) . '</p>';
        
        if (!empty($opstaffs['page_link'])) {
            echo '<a href="' . htmlspecialchars($opstaffs['page_link']) . '" class="Offices">Office of the President Staff</a>';
        }
        
        echo '</div>';
        echo '</div>';
    }
    ?>


        <!-- University and Board Secretary -->
        <div class="position-title">University and Board Secretary</div>
        <?php
    require_once '../classes/UniversityBoardSecretary.class.php';

    $uniBoardSecretaryObj = new UniversityBoardSecretary();
    $uniBoardSecretary = $uniBoardSecretaryObj->fetchAll(); // Fetch all officials

    foreach ($uniBoardSecretary as $uniBoardSecretarys) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<h3>' . htmlspecialchars($uniBoardSecretarys['name']) . '</h3>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($uniBoardSecretarys['title']) . '</p>';
        
        if (!empty($uniBoardSecretarys['page_link'])) {
            echo '<a href="' . htmlspecialchars($uniBoardSecretarys['page_link']) . '" class="Offices">Office of the President Staff</a>';
        }
        
        echo '</div>';
        echo '</div>';
    }
    ?>

        <!-- Directors -->
        <div class="position-title">Directors</div>
        <?php
    require_once '../classes/Directors.class.php';

    $directorsObj = new Directors();
    $director = $directorsObj->fetchAll(); // Fetch all officials

    foreach ($director as $directors) {
        echo '<div class="official-row">';
        echo '<div class="official-name">';
        echo '<h3>' . htmlspecialchars($directors['name']) . '</h3>';
        echo '</div>';
        
        echo '<div class="official-position">';
        echo '<p>' . htmlspecialchars($directors['title']) . '</p>';
        
        echo '</div>';
        echo '</div>';
    }
    ?>

        <!-- Campus Administrators -->
        <div class="position-title">Campus Administrators</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Mary Jocelyn V. Battung</h3>
            </div>
            <div class="official-position">
                <p>Campus Administrator, Pagadian</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Maria Celeste B. Dela Cruz</h3>
            </div>
            <div class="official-position">
                <p>Campus Administrator, Malangas</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Felwin Lovely R. Natividad</h3>
            </div>
            <div class="official-position">
                <p>Campus Administrator, Ipil</p>
            </div>
        </div>

        <!-- Integrated Laboratory School Principals & Asst. Principals -->
        <div class="position-title">Integrated Laboratory School Principals & Asst. Principals</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Riah Barcelona</h3>
            </div>
            <div class="official-position">
                <p>Principal. ILS -High School</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Anna Louisa R. Perez</h3>
            </div>
            <div class="official-position">
                <p>Principal, ILS- Elementary</p>
            </div>
        </div>

        <!-- Assistant & Associate Directors | Assistant Chairpersons | Special Assistants -->
        <div class="position-title">Assistant & Associate Directors | Assistant Chairpersons | Special Assistants</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Richard C. Dagalea</h3>
            </div>
            <div class="official-position">
                <p>Asst. Director, Public Affairs Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Swidin S. Husin</h3>
            </div>
            <div class="official-position">
                <p>Associate Director of the Research Development and Evaluation Center</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Elmer M. Labad</h3>
            </div>
            <div class="official-position">
                <p>Asst. Director, Gender Research and Resource Center (GRRC)</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Joel C. Macasinag</h3>
            </div>
            <div class="official-position">
                <p>Asst. Manager, University PRESS(UPRESS)</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Reynaldo R. Macaso</h3>
            </div>
            <div class="official-position">
                <p>Asst. Director of the scholarship Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Keynard L. Ponce</h3>
            </div>
            <div class="official-position">
                <p>Asst. to the Director of Center for Continuing Education (CCE)</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Vinchall A. Siason</h3>
            </div>
            <div class="official-position">
                <p>Asst. Director of the Quality Assurance Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Salimar B. Tahil</h3>
            </div>
            <div class="official-position">
                <p>Asst. Director of the Management Information System and Technology Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Rochard T. Tarroza</h3>
            </div>
            <div class="official-position">
                <p>Asst. Director, Student Affairs Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Sophia L. Bensali</h3>
            </div>
            <div class="official-position">
                <p>Asst. to the Director of Center for Science Teaching and Training</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Melodina V. Francisco</h3>
            </div>
            <div class="official-position">
                <p>Asst. Director, Alumi Relations Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Mely Jane D. Jacinto</h3>
            </div>
            <div class="official-position">
                <p>Asst. Director, Quality Management Systems Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Dulce Amor P. Matondo</h3>
            </div>
            <div class="official-position">
                <p>Assistant to the VPRESEL</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Atty. Aenn Bernielee C. Limbaga</h3>
            </div>
            <div class="official-position">
                <p>Asst. Director, Special Program and Projects Office (SPPO)</p>
            </div>
        </div>

        <!-- Technical Assistant | Technical Associates -->
        <div class="position-title">Technical Assistant | Technical Associates</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Edwin I. Arip</h3>
            </div>
            <div class="official-position">
                <p>Tech. Associate (BS Com Sci)</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Ahmedzam S. Nasaluddin</h3>
            </div>
            <div class="official-position">
                <p>Tech. Associate Under the Office of the President, for the infrastructure Project concurrent capacity as Technical Working group of the BIDS and Awards Committee</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Victor Ryan H. Tangalin</h3>
            </div>
            <div class="official-position">
                <p>Technical Associate, Center for Hands of Goodwill</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Ryan B. Cabangcala</h3>
            </div>
            <div class="official-position">
                <p>Technical Associate to the Vice President for Research Extension Services and External Linkages</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Shamir R. Kassim</h3>
            </div>
            <div class="official-position">
                <p>Executive Assistant for Special Academic concerns at the Office of the President</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Marlon C. Grande</h3>
            </div>
            <div class="official-position">
                <p>Technical Associate for the Community Outreach and Development Advocacy Program (CODAP) in concurrent capacity as the Extension Coordinator of the College of Engineering</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Johana J. Abdula</h3>
            </div>
            <div class="official-position">
                <p>Tech. Asso. for the External Studies Unit – BS Crim. Program</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Abigail F. Antonio</h3>
            </div>
            <div class="official-position">
                <p>Technical Associate to the Vice President for Academic Affairs</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Mercendes A. Bejerano</h3>
            </div>
            <div class="official-position">
                <p>Tech. Asst. to the Vice-President for Academic Affairs</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Bernadeth A. Encarnacion</h3>
            </div>
            <div class="official-position">
                <p>Tech. Asso. for the External Studies Unit – BS Crim. Program</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Melanie A. Turco</h3>
            </div>
            <div class="official-position">
                <p>Technical Associate to the Vice President for Administration and Finance</p>
            </div>
        </div>

        <!-- Chairpersons -->
        <div class="position-title">Chairpersons</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Ferdinand S. Guardo</h3>
            </div>
            <div class="official-position">
                <p>Chief Information Officer (CIO) of the University RE DICT</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Fredelino M. San Juan</h3>
            </div>
            <div class="official-position">
                <p>Chair Bids and Award Committee</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Ricardo B. Gonzales</h3>
            </div>
            <div class="official-position">
                <p>Chair of the Tech. Inspection Committee</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Ruperto D. Mendoza, Jr.</h3>
            </div>
            <div class="official-position">
                <p>Chair, University Review and Evaluation Committee</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Analyn D. Saavedra</h3>
            </div>
            <div class="official-position">
                <p>Chair, Research Ethics Oversight Committee (REOC)</p>
            </div>
        </div>

        <!-- Manager -->
        <div class="position-title">Manager</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Russel J. Ingkoh</h3>
            </div>
            <div class="official-position">
                <p>Marketing Service Manager</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Antonio Angelo J. Limbaga</h3>
            </div>
            <div class="official-position">
                <p>MITHI</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Joel C. Macasinag</h3>
            </div>
            <div class="official-position">
                <p>Manager University PRESS</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Angelito B. Noynay</h3>
            </div>
            <div class="official-position">
                <p>Manager of the Garment Shop</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Atty. Maria Luisa Pilar C. Elago</h3>
            </div>
            <div class="official-position">
                <p>Manager of the Innovation and Technology Support Office (ITSO)</p>
            </div>
        </div>

        <!-- HEAD/CHAIR OF THE GRADUATE SCHOOL -->
        <div class="position-title">HEAD/CHAIR OF THE GRADUATE SCHOOL</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Leo A. Hermosilla</h3>
            </div>
            <div class="official-position">
                <p>CSSPE</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Arnel R. Madrazo</h3>
            </div>
            <div class="official-position">
                <p>Chair, Graduate School, College of Teacher Education on concurrent Coordinator of the Research for Utilization, Publication and Information</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Rochelleo E. Mariano</h3>
            </div>
            <div class="official-position">
                <p>College of Science & Mathematics</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Nurwin Adam O. Muhammad</h3>
            </div>
            <div class="official-position">
                <p>College of Engineering</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Johana J. Abdula</h3>
            </div>
            <div class="official-position">
                <p>College of Criminal Justice Education</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Rubelle Marshah H. Alavar</h3>
            </div>
            <div class="official-position">
                <p>College of Nursing</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Marites A. Barrios</h3>
            </div>
            <div class="official-position">
                <p>College of Home Economics</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Wylen L. Lipanglipang</h3>
            </div>
            <div class="official-position">
                <p>CSWCD</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Fadzralyn A. Karanain</h3>
            </div>
            <div class="official-position">
                <p>Chair of the Graduate School, College of Liberal Arts</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Emerissa Jane L. Tendero</h3>
            </div>
            <div class="official-position">
                <p>Chair of Graduate, College of Public Administration and Development Studies</p>
            </div>
        </div>

        <!-- Coordinators -->
        <div class="position-title">Coordinators</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Julito B. Bande</h3>
            </div>
            <div class="official-position">
                <p>Campus Coordinator, Alicia</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Noel A. Comeros</h3>
            </div>
            <div class="official-position">
                <p>Campus Coordinator, Curuan</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Hernan N. Rosaldo II</h3>
            </div>
            <div class="official-position">
                <p>Coordinator, Library and Archive</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Ariel M. Macailing</h3>
            </div>
            <div class="official-position">
                <p>Campus Coordinator, Imelda</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Pacamalan, Leo Myco</h3>
            </div>
            <div class="official-position">
                <p>Campus Coordinator, Siay</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Eryle Edvin E. Protacio</h3>
            </div>
            <div class="official-position">
                <p>Coordinator, Local Studies</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Noel V. Pugosa</h3>
            </div>
            <div class="official-position">
                <p>Campus Coordinator, Molave</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Hernan N. Rosaldo II</h3>
            </div>
            <div class="official-position">
                <p>Coordinator, BIDANI</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Jiellzon Jaime T. Villarama</h3>
            </div>
            <div class="official-position">
                <p>Coordinator, University Museum</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Carmela J. Go Silk</h3>
            </div>
            <div class="official-position">
                <p>OIC – Campus Coordinator Diplahan</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Lolita R. Lacao-Lacao</h3>
            </div>
            <div class="official-position">
                <p>OIC – Campus Coordinator Olutanga</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Divine Grace M. Marumas</h3>
            </div>
            <div class="official-position">
                <p>Coordinator Instructional Support & Materials Production (ISMP)</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Michelle S. Paderan</h3>
            </div>
            <div class="official-position">
                <p>OIC – Campus Coordinator of Mabuhay</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Arlyn O. Rebuza</h3>
            </div>
            <div class="official-position">
                <p>Campus Coordinator College of Agriculture</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Nosca Bonna Ar D. Taasin</h3>
            </div>
            <div class="official-position">
                <p>OIC – Campus Coordinator of Tungawan</p>
            </div>
        </div>

        <!-- Section Chief -->
        <div class="position-title">Section Chief</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Eric H. Alfaro</h3>
            </div>
            <div class="official-position">
                <p>University Registrar</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. John Paul S. Alvarez</h3>
            </div>
            <div class="official-position">
                <p>Supervising Administrative Officer (Finance)</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Benhur A. Asid</h3>
            </div>
            <div class="official-position">
                <p>University Librarian</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Erlando G. Coros</h3>
            </div>
            <div class="official-position">
                <p>Chief Security Services</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Edgar A. Demayo</h3>
            </div>
            <div class="official-position">
                <p>Engineer III</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Engr. Ricardo B. Gonzales</h3>
            </div>
            <div class="official-position">
                <p>University Electrical Engineer on concurrent Chairman of the Inspection Committee</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Alen M. Marcelino</h3>
            </div>
            <div class="official-position">
                <p>Head, Motorpool</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Alfredo D. Montero</h3>
            </div>
            <div class="official-position">
                <p>Supply Officer III</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Ariel R. Perez</h3>
            </div>
            <div class="official-position">
                <p>Labor General Foreman</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Joerland- Jansen R. Reyes</h3>
            </div>
            <div class="official-position">
                <p>Property Management Office</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Atty. Roberto Rivero III</h3>
            </div>
            <div class="official-position">
                <p>Attorney IV</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Oscar S. Sicat</h3>
            </div>
            <div class="official-position">
                <p>Supervising Administrative Officer</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Suzette G. Ducanes</h3>
            </div>
            <div class="official-position">
                <p>Budget Officer</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Felicitas Asuncion C. Elago</h3>
            </div>
            <div class="official-position">
                <p>Medical Officer III</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Ma. Teresita J. Rodriguez</h3>
            </div>
            <div class="official-position">
                <p>OIC-Human Resource Management Officer III on concurrent capacity Director for Administration</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mrs. Erlinda C. Macaso</h3>
            </div>
            <div class="official-position">
                <p>Records Officer III</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Venus Lyn C. Martin</h3>
            </div>
            <div class="official-position">
                <p>Internal Auditor III</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Lallaine Anne. L. Mariano</h3>
            </div>
            <div class="official-position">
                <p>Cashier III</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Abigail Irene B. Marquez</h3>
            </div>
            <div class="official-position">
                <p>Information Officer III</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Cristianne Dawn R. Sicat</h3>
            </div>
            <div class="official-position">
                <p>OIC – Accountant II</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Darea Jonnah B. Soliterio</h3>
            </div>
            <div class="official-position">
                <p>APA, President</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mrs. Carolina E. Tejero</h3>
            </div>
            <div class="official-position">
                <p>General Services</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Ms. Debra Ann M. Ponce</h3>
            </div>
            <div class="official-position">
                <p>University Planning Officer III</p>
            </div>
        </div>

        <!-- Other Services -->
        <div class="position-title">Other Services</div>
        <div class="official-row">
            <div class="official-name">
                <h3>Asso. Prof. Eric Roland R. Natividad</h3>
            </div>
            <div class="official-position">
                <p>Moderator, University Theatre Guild</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Anthony B. Barandino</h3>
            </div>
            <div class="official-position">
                <p>Moderator, Visual Arts</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Mr. Nathaniel G. Saavedra</h3>
            </div>
            <div class="official-position">
                <p>Moderator, Jambangan Dance Troupe</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Arch. Joseph Andrew L. Sahial</h3>
            </div>
            <div class="official-position">
                <p>University Project Management Officer</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Dr. Jeremiah D. Calisang</h3>
            </div>
            <div class="official-position">
                <p>Moderator, WMSU Grand Chorale</p>
            </div>
        </div>

        <div class="official-row">
            <div class="official-name">
                <h3>Asst. Prof. Ruzzel L. Nazario</h3>
            </div>
            <div class="official-position">
                <p>Moderator, Literary Arts</p>
            </div>
        </div>

        <!-- ACADEMIC DEANS -->
        <div class="section-header">
            Academic Deans
        </div>

       
            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Abdel-Azeem A. Moammad Siddique</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Asian & Islamic Studies</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Mohammad Khasim I. Abdulmajid</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Medicine</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Hashim N. Alawi</h3>
                </div>
                <div class="official-position">
                    <p>OIC – Dean, College of Nursing</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Engr. Ulmen Riff L. Circulado</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Engineering</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Engr. Mark L. Flores</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Computing Studies</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Byron B. Go Silk</h3>
                </div>
                <div class="official-position">
                    <p>Dean, External Studies Unit</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Mario Ritchie O. Hibionada</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Criminology</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Almudi G. Lukman</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Forestry & Environmental Studies</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Atty. Irma Mari Madelle-Rivero</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Law</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Mohammad Nur S. Paspasan</h3>
                </div>
                <div class="official-position">
                    <p>Acting Dean, College of Science and Mathematics</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Roel F. Marcial</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Liberal Arts</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Ricardo A. Somblingo</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Teacher Education</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Elderico P. Tabal</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Agriculture</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Jocelyn T. Gaas</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Social Work & Community Development</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Ma. Blancaflor R. Jimeno</h3>
                </div>
                <div class="official-position">
                    <p>Dean, CSSPE</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Maria Socorro Yvonne H. Ramos</h3>
                </div>
                <div class="official-position">
                    <p>Coordinating Dean, Graduate School</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Arch. Ruby Alita A. Sahi</h3>
                </div>
                <div class="official-position">
                    <p>OIC – Dean, College of Architecture</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Lucia M. Santos</h3>
                </div>
                <div class="official-position">
                    <p>Dean, College of Home Economics</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Sarah S. Taupan</h3>
                </div>
                <div class="official-position">
                    <p>OIC- Dean, CPADS on concurrent Director, Quality Assurance Center Office / Chair of the ISA</p>
                </div>
            </div>

            <!-- Associate Dean -->
            <div class="position-title">Associate Dean</div>
            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Roel P. Borja</h3>
                </div>
                <div class="official-position">
                    <p>College of Liberal Arts</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asst. Prof. Darwin V. Mendoza</h3>
                </div>
                <div class="official-position">
                    <p>College of Home Economics</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Ricardo Danilo E. Corteza</h3>
                </div>
                <div class="official-position">
                    <p>College of Sports Science and Physical Education</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Kent Adnil C. Lao</h3>
                </div>
                <div class="official-position">
                    <p>College of Teacher Education</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Nurmia L. Ticao</h3>
                </div>
                <div class="official-position">
                    <p>College of Asian and Islamic Studies</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Engr. Czarina Adelene J. Aquino</h3>
                </div>
                <div class="official-position">
                    <p>College of Engineering</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Edwin I. Arip</h3>
                </div>
                <div class="official-position">
                    <p>College of Computing Studies</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Bernard Q. Suriaga</h3>
                </div>
                <div class="official-position">
                    <p>College of Public Administration and Development Studies</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asst. Prof. Sophia L. Bensali</h3>
                </div>
                <div class="official-position">
                    <p>College of Science and Mathematics concurrent OIC-Director RSTC</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Grace N. Floriano</h3>
                </div>
                <div class="official-position">
                    <p>College of Nursing</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso Prof. Jannet R. Francisco</h3>
                </div>
                <div class="official-position">
                    <p>College of Social Work and Community Development</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Gladess A. Pagal</h3>
                </div>
                <div class="official-position">
                    <p>College of Agriculture</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asst. Prof. Ruzzel L. Nazario</h3>
                </div>
                <div class="official-position">
                    <p>WMSU External Studies Unit (ESU)</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asso. Prof. Maryam-Lizbeth L. Sahijuan</h3>
                </div>
                <div class="official-position">
                    <p>College of Medicine</p>
                </div>
            </div>

            <!-- External Studies Units -->
            <div class="position-title">External Studies Units</div>
            <div class="official-row">
                <div class="official-name">
                    <h3>Prof. Nicasio F. Gonzales</h3>
                </div>
                <div class="official-position">
                    <p>OIC- Campus Administrator, WMSU Curuan Campus</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Ariel Macailing</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Imelda</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Mr. Myco Leo B. Pacamalan</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Siay</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Mr. Reymond G. Paragas</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Naga</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Mr. Noel V. Pugosa</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Molave</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Mr. Nerio P. Sacro</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Aurora</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Dr. Carmela Go Silk</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Diplahan</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Ms. Lolita R. Lacao-Lacao</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Olutanga</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Asst. Prof. Erjorie Laguna</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Malangas</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Ms. Felwyn Lovely R. Natividad</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Ipil</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Ms. Michelle S. Paderan</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Mabuhay</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Ms. Criselda D. Ricohermoso</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Pagadian</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Ms. Nosca Bonna Ar D. Taasin</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Tungawan</p>
                </div>
            </div>

            <div class="official-row">
                <div class="official-name">
                    <h3>Ms. Abigail Villamor</h3>
                </div>
                <div class="official-position">
                    <p>OIC-Campus Coordinator, WMSU Alicia</p>
                </div>
            </div>

    </div>
</body>
</html>