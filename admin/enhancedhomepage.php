<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>WMSU ADMINISTRATION</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Open+Sans:wght@800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../css/home.css" />
    <link rel="stylesheet" href="../css/admin_officials.css" />
    <link rel="stylesheet" href="../css/organizational-chart.css" />
</head>
<body>
    <?php require_once '../__includes/navbar.php'; ?>
    <?php require_once '../__includes/head.php'; ?>

<?php
// Helper function to render staff rows
function renderStaffRows($staffList) {
    foreach ($staffList as $staff) {
        echo '<div class="staff-row">';
        echo '    <div class="staff-name">' . htmlspecialchars($staff['name']) . '</div>';
        echo '    <div class="staff-title">' . htmlspecialchars($staff['title']) . '</div>';
        echo '</div>';
    }
}
?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">
                <span class="hero-title-main">ADMINISTRATION</span>
                <span class="hero-title-sub">PAGE</span>
            </h1>
            <p>The WMSU Administration page offers a comprehensive look into the <strong>individuals who lead and shape Western Mindanao State University</strong>. Here, you will find the <strong>Board of Regents, university officials</strong>, and key representatives whose leadership, dedication, and vision continue to drive the university toward <strong>academic excellence, innovation, and inclusive growth</strong>.</p>
            <p>This section highlights the people behind WMSU's progress — the decision-makers and advocates who work tirelessly to uphold its mission and empower its community.</p>
            <a href="#org-chart" class="btn">Learn More</a>
    </div>
</section>

<!-- Organizational Chart Section -->
<div style="height: 40px;"></div>
<h2 id="org-chart" style="text-align:center; color:#7C0902; font-weight:800; margin-bottom: 20px;">WMSU Organizational Chart</h2>
<div class="org-chart">
    <ul class="tree">
        <li>Board of Regents
            <ul>
                <li>Chairperson</li>
                <li>Members</li>
            </ul>
        </li>
        <li>President
            <ul>
                <li>Chief of Staff</li>
                <li>Executive Assistant</li>
                <li>Special Assistant to President</li>
                <li>University Board Secretary</li>
                <li>Vice Presidents
                    <ul>
                        <li>VP for Academic Affairs
                            <ul>
                                <li>Academic Deans</li>
                                <li>Associate Deans</li>
                                <li>Graduate School Head</li>
                                <li>University Curriculum Chair</li>
                            </ul>
                        </li>
                        <li>VP for Administrative and Finance
                            <ul>
                                <li>Directors</li>
                                <li>Managers</li>
                                <li>Section Chiefs</li>
                            </ul>
                        </li>
                        <li>VP for Research and Extension</li>
                        <li>VP for Resource Generation</li>
                        <li>VP for Student Affairs and Services</li>
                    </ul>
                </li>
                <li>Campus Administrators</li>
                <li>Other Services</li>
            </ul>
        </li>
    </ul>
</div>

<div class="divid-ad">
    <div class="divid-line-ad"></div>
    <div class="divid-text-ad">Board of Regents</div>
    <div class="divid-line-ad"></div>
</div>

<section class="board-section">
        <div class="board-container">
            <h2 class="board-title">WHAT IS THE BOARD OF REGENTS?</h2>
            <div class="board-description">
                <p>The <span class="highlight">Board of Regents</span> is the highest policy-making body of <span class="highlight">Western Mindanao State University</span>. Composed of distinguished leaders from various sectors—including education, government, and the private sector—the Board is responsible for setting the strategic direction of the university, approving key policies, and ensuring the institution's alignment with its academic mission and public mandate.</p>
                <br />
                <p>Through collaborative governance and informed decision-making, the <span class="highlight">Board of Regents plays a vital role in upholding WMSU's standards of excellence</span> and fostering its continued growth as a premier institution in the region.</p>
            </div>

            <!-- Board Members Grid -->
            <div class="members-grid">
            <?php
            require_once '../classes/bor.class.php';

            $bor = new Board();
            $boardMembers = $bor->fetchAll(); // Fetch all board members

            // Add representation info to specific members
            foreach ($boardMembers as &$member) {
                if ($member['name'] === 'HON. ALAN PETER S. CAYETANO') {
                    $member['representation'] = [
                        [
                            'name' => 'HON. ROLANDO L. MACASAET',
                            'image' => 'macasaet-1.jpg'
                        ]
                    ];
                } elseif ($member['name'] === 'HON. MARK O. GO') {
                    $member['representation'] = [
                        [
                            'name' => 'HON. EMMYLOU B. YANGA',
                            'image' => 'yanga.jpg'
                        ]
                    ];
                }
            }
            unset($member);

            $count = 0;

            foreach ($boardMembers as $index => $member) {
                // Skip representatives as separate members
                if ($member['name'] === 'HON. ROLANDO L. MACASAET' || $member['name'] === 'HON. EMMYLOU B. YANGA' || $member['name'] === 'Represented by:') {
                    continue;
                }
                
                // Limit to 12 members
                if ($count >= 12) {
                    break;
                }
                $count++;

                // Member card with data-index attribute for modal targeting
                echo '<div class="member-card">';
                echo '    <img class="profile-img" src="../images/' . htmlspecialchars($member['image']) . '" alt="' . htmlspecialchars($member['name']) . '">';
                echo '    <h3>' . htmlspecialchars($member['name']) . '</h3>';
                echo '    <p>' . htmlspecialchars($member['title_bor']) . '</p>';
                
                // See More button with data-index to identify member
                echo '    <button class="btn see-more-btn" data-index="' . $index . '">See More</button>';
                
                echo '</div>';
            }
            ?>
            </div>

            <!-- Modal container -->
            <div id="member-modal" class="modal-container">
                <div class="modal-header">
                    <button class="close-button" id="modal-close-btn">✕</button>
                </div>
                <div class="modal-content">
                    <div class="profile-image" id="modal-profile-image">
                        <img src="" alt="">
                    </div>
                    <div class="profile-info">
                        <h1 id="modal-name"></h1>
                        <h2 id="modal-title"></h2>
                        <p id="modal-description">No description available.</p>
                        <div class="representation" id="modal-representation" style="display:none;">
                            <h3>REPRESENTED BY:</h3>
                            <img class="representative-image" src="" alt="" id="modal-rep-image">
                            <h2 id="modal-rep-name" style="text-align: right; margin-top: 10px;"></h2>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                window.boardMembers = <?php echo json_encode($boardMembers); ?>;
            </script>
            <script src="../js/organizational-chart.js"></script>

         
            <div class="divider">              
    <div class="divider-line"></div>
    <div class="divider-text">Administrative Officials</div>
    <div class="divider-line"></div>
</div>

<div class="description">
    <p>The <span class="highlight">Administrative Officials</span> of Western Mindanao State University (WMSU) constitute the <span class="highlight">comprehensive leadership team</span> responsible for the university's <span class="highlight">strategic direction</span>, <span class="highlight">academic excellence</span>, and <span class="highlight">operational efficiency</span>. This organizational body includes the <span class="highlight">University President</span>, <span class="highlight">Vice Presidents overseeing various sectors</span> such as Academic Affairs, Administration and Finance, Research, Extension Services, and Resource Generation. Supporting the executive leadership are the Office of the President staff, the University and Board Secretary, and a cadre of Directors managing key departments like Finance, Admissions, Student Affairs, and Information Technology.</p>
    <p>The <span class="highlight">administrative framework extends</span> to Campus Administrators <span class="highlight">across WMSU's satellite campuses</span>, Principals and Assistant Principals of the Integrated Laboratory Schools, as well as Assistant Directors, Chairpersons, and Coordinators who ensure the seamless operation of both academic and non-academic units.</p>
    <p>Together, these officials uphold <span class="highlight">WMSU's commitment</span> to <span class="highlight">providing quality education</span> and <span class="highlight">fostering community development</span>.</p>
</div>

<div class="president-section">
    <?php
    require_once '../classes/pres.class.php';

    $pres = new Pres();
    $PresOfficials = $pres->fetchAll(); // Fetch all officials

    foreach ($PresOfficials as $Presofficial) {
        echo '<div class="profile-bubble-container">';
        echo '    <div class="small-bubble"></div>';
        echo '    <div class="profile-bubble">';
        if (!empty($Presofficial["image"])) {
            echo '<img src="../images/' . htmlspecialchars($Presofficial["image"]) . '" alt="' . htmlspecialchars($Presofficial["name"]) . '" class="profile-image">';
        } else {
            echo '<img src="../images/Board of Regents/carla-ochotorena.jpg" alt="' . htmlspecialchars($Presofficial["name"]) . '" class="profile-image">';
        }
        echo '    </div>';
        echo '</div>';

        echo '<div class="president-info">';
        echo '<h2>' . htmlspecialchars($Presofficial['name']) . '</h2>';
        echo '<h3>' . htmlspecialchars($Presofficial['title']) . '</h3>';
        echo '<button class="sub-offices-btn">See Sub-Offices</button>';
        if (!empty($Presofficial['page_link'])) {
            echo '<a href="../Offices/' . htmlspecialchars($Presofficial['page_link']) . '" class="office-link">Proceed to President\'s Office Page</a>';
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
echo '<div class="staff-row">';
echo '<div class="staff-name">';
echo '<h3>' . htmlspecialchars($VicePresofficial['name']) . '</h3>';
echo '</div>';

echo '<div class="staff-title">';
echo '<p>' . htmlspecialchars($VicePresofficial['title']) . '</p>';

if (!empty($VicePresofficial['page_link'])) {
echo '<a href="../Offices/' . htmlspecialchars($VicePresofficial['page_link']) . '" class="office-link">Office of the Vice President</a>';
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
echo '<div class="staff-row">';
echo '<div class="staff-name">';
echo '<h3>' . htmlspecialchars($opstaffs['name']) . '</h3>';
echo '</div>';

echo '<div class="staff-title">';
echo '<p>' . htmlspecialchars($opstaffs['title']) . '</p>';

if (!empty($opstaffs['page_link'])) {
echo '<a href="../Offices/' . htmlspecialchars($opstaffs['page_link']) . '" class="office-link">Office of the President Staff</a>';
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
echo '<div class="staff-row">';
echo '<div class="staff-name">';
echo '<h3>' . htmlspecialchars($uniBoardSecretarys['name']) . '</h3>';
echo '</div>';

echo '<div class="staff-title">';
echo '<p>' . htmlspecialchars($uniBoardSecretarys['title']) . '</p>';

if (!empty($uniBoardSecretarys['page_link'])) {
echo '<a href="../Offices/' . htmlspecialchars($uniBoardSecretarys['page_link']) . '" class="office-link">Office of the President Staff</a>';
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
echo '<div class="staff-row">';
echo '<div class="staff-name">';
echo '<h3>' . htmlspecialchars($directors['name']) . '</h3>';
echo '</div>';

echo '<div class="staff-title">';
echo '<p>' . htmlspecialchars($directors['title']) . '</p>';

echo '</div>';
echo '</div>';
}
?>

<!-- Campus Administrators -->
<div class="position-title">Campus Administrators</div>
<?php
require_once '../classes/CampusAdministrators.class.php';

$campusAdminObj = new CampusAdministrators();
$campusAdmin = $campusAdminObj->fetchAll(); // Fetch all officials

foreach ($campusAdmin as $campusAdmins) {
echo '<div class="staff-row">';
echo '<div class="staff-name">';
echo '<h3>' . htmlspecialchars($campusAdmins['name']) . '</h3>';
echo '</div>';

echo '<div class="staff-title">';
echo '<p>' . htmlspecialchars($campusAdmins['title']) . '</p>';

echo '</div>';
echo '</div>';
}
?>

<!-- Integrated Laboratory School Principals & Asst. Principals -->
<div class="position-title">Integrated Laboratory School Principals & Asst. Principals</div>
<?php
require_once '../classes/ILSPrincipals.class.php';

$ILSPrincipalsObj = new ILSPrincipals();
$ILSPrincipal = $ILSPrincipalsObj->fetchAll(); // Fetch all officials

foreach ($ILSPrincipal as $ILSPrincipals) {
echo '<div class="staff-row">';
echo '<div class="staff-name">';
echo '<h3>' . htmlspecialchars($ILSPrincipals['name']) . '</h3>';
echo '</div>';

echo '<div class="staff-title">';
echo '<p>' . htmlspecialchars($ILSPrincipals['title']) . '</p>';

echo '</div>';
echo '</div>';
}
?>


<!-- Assistant & Associate Directors | Assistant Chairpersons | Special Assistants -->
<div class="position-title">Assistant & Associate Directors | Assistant Chairpersons | Special Assistants</div>
<?php
require_once '../classes/AssistantDirectors.class.php';

$assistantDirectorObj = new AssistantDirectors();
$assistantDirector = $assistantDirectorObj->fetchAll(); // Fetch all officials

foreach ($assistantDirector as $assistantDirectors) {
echo '<div class="staff-row">';
echo '<div class="staff-name">';
echo '<h3>' . htmlspecialchars($assistantDirectors['name']) . '</h3>';
echo '</div>';

echo '<div class="staff-title">';
echo '<p>' . htmlspecialchars($assistantDirectors['title']) . '</p>';

echo '</div>';
echo '</div>';
}
?>

<!-- Technical Assistant | Technical Associates -->
<div class="position-title">Technical Assistant | Technical Associates</div>
<?php
require_once '../classes/TechnicalAssistants.class.php';

$techAssistObj = new TechnicalAssistants();
$techAssist = $techAssistObj->fetchAll(); // Fetch all officials

foreach ($techAssist as $techAssists) {
echo '<div class="staff-row">';
echo '<div class="staff-name">';
echo '<h3>' . htmlspecialchars($techAssists['name']) . '</h3>';
echo '</div>';

echo '<div class="staff-title">';
echo '<p>' . htmlspecialchars($techAssists['title']) . '</p>';

echo '</div>';
echo '</div>';
}
?>

<!-- Chairpersons -->
<div class="position-title">Chairpersons</div>
<?php
require_once '../classes/Chairpersons.class.php';

$chairpersonObj = new Chairpersons();
$chairperson = $chairpersonObj->fetchAll(); // Fetch all officials

foreach ($chairperson as $chairpersons) {
echo '<div class="staff-row">';
echo '<div class="staff-name">';
echo '<h3>' . htmlspecialchars($chairpersons['name']) . '</h3>';
echo '</div>';

echo '<div class="staff-title">';
echo '<p>' . htmlspecialchars($chairpersons['title']) . '</p>';

echo '</div>';
echo '</div>';
}
?>

<!-- Manager -->
<div class="position-title">Manager</div>
<?php
require_once '../classes/Managers.class.php';

$managerObj = new Managers();
$manager = $managerObj->fetchAll(); // Fetch all officials

foreach ($manager as $managers) {
echo '<div class="staff-row">';
echo '<div class="staff-name">';
echo '<h3>' . htmlspecialchars($managers['name']) . '</h3>';
echo '</div>';

echo '<div class="staff-title">';
echo '<p>' . htmlspecialchars($managers['title']) . '</p>';

echo '</div>';
echo '</div>';
}
?>

<!-- HEAD/CHAIR OF THE GRADUATE SCHOOL -->
<div class="position-title">HEAD/CHAIR OF THE GRADUATE SCHOOL</div>
<?php
require_once '../classes/GraduateSchoolHead.class.php';

$graduateSchoolHeadObj = new GraduateSchoolHead();
$graduateSchoolHead = $graduateSchoolHeadObj->fetchAll(); // Fetch all officials

foreach ($graduateSchoolHead as $graduateSchoolHeads) {
echo '<div class="staff-row">';
echo '<div class="staff-name">';
echo '<h3>' . htmlspecialchars($graduateSchoolHeads['name']) . '</h3>';
echo '</div>';

echo '<div class="staff-title">';
echo '<p>' . htmlspecialchars($graduateSchoolHeads['title']) . '</p>';

echo '</div>';
echo '</div>';
}
?>

<!-- Coordinators -->
<div class="position-title">Coordinators</div>
<?php
require_once '../classes/Coordinators.class.php';

$coordinatorObj = new Coordinators();
$coordinator = $coordinatorObj->fetchAll(); // Fetch all officials

foreach ($coordinator as $coordinators) {
echo '<div class="staff-row">';
echo '<div class="staff-name">';
echo '<h3>' . htmlspecialchars($coordinators['name']) . '</h3>';
echo '</div>';

echo '<div class="staff-title">';
echo '<p>' . htmlspecialchars($coordinators['title']) . '</p>';

echo '</div>';
echo '</div>';
}
?>

<!-- Section Chief -->
<div class="position-title">Section Chief</div>
<?php
require_once '../classes/SectionChiefs.class.php';

$sectionChiefObj = new SectionChiefs();
$sectionChief = $sectionChiefObj->fetchAll(); // Fetch all officials

foreach ($sectionChief as $sectionChiefs) {
echo '<div class="staff-row">';
echo '<div class="staff-name">';
echo '<h3>' . htmlspecialchars($sectionChiefs['name']) . '</h3>';
echo '</div>';

echo '<div class="staff-title">';
echo '<p>' . htmlspecialchars($sectionChiefs['title']) . '</p>';

echo '</div>';
echo '</div>';
}
?>

<!-- Other Services -->
<div class="position-title">Other Services</div>
<?php
require_once '../classes/OtherServices.class.php';

$otherServiceObj = new OtherServices();
$otherService = $otherServiceObj->fetchAll(); // Fetch all officials

foreach ($otherService as $otherServices) {
echo '<div class="staff-row">';
echo '<div class="staff-name">';
echo '<h3>' . htmlspecialchars($otherServices['name']) . '</h3>';
echo '</div>';

echo '<div class="staff-title">';
echo '<p>' . htmlspecialchars($otherServices['title']) . '</p>';

echo '</div>';
echo '</div>';
}
?>

<!-- ACADEMIC DEANS -->
<div class="board-title">
Academic Deans
</div>
<?php
require_once '../classes/AcademicDean.class.php';

$academicDeanObj = new AcademicDean();
$academicDean = $academicDeanObj->fetchAll(); // Fetch all officials
echo "<br>";
foreach ($academicDean as $academicDeans) {
echo '<div class="staff-row">';
echo '<div class="staff-name">';
echo '<h3>' . htmlspecialchars($academicDeans['name']) . '</h3>';
echo '</div>';

echo '<div class="staff-title">';
echo '<p>' . htmlspecialchars($academicDeans['title']) . '</p>';

echo '</div>';
echo '</div>';
}
?>


<!-- Associate Dean -->
<div class="position-title">Associate Dean</div>
<?php
require_once '../classes/AssociateDean.class.php';

$associateDeanObj = new AssociateDean();
$associateDean = $associateDeanObj->fetchAll(); // Fetch all officials

foreach ($associateDean as $associateDeans) {
echo '<div class="staff-row">';
echo '<div class="staff-name">';
echo '<h3>' . htmlspecialchars($associateDeans['name']) . '</h3>';
echo '</div>';

echo '<div class="staff-title">';
echo '<p>' . htmlspecialchars($associateDeans['title']) . '</p>';

echo '</div>';
echo '</div>';
}
?>

<!-- External Studies Units -->
<div class="position-title">External Studies Units</div>
<?php
require_once '../classes/ExternalStudiesUnit.class.php';

$externalStudiesUnitObj = new ExternalStudiesUnit();
$externalStudiesUnit = $externalStudiesUnitObj->fetchAll(); // Fetch all officials

foreach ($externalStudiesUnit as $externalStudiesUnits) {
echo '<div class="staff-row">';
echo '<div class="staff-name">';
echo '<h3>' . htmlspecialchars($externalStudiesUnits['name']) . '</h3>';
echo '</div>';

echo '<div class="staff-title">';
echo '<p>' . htmlspecialchars($externalStudiesUnits['title']) . '</p>';

echo '</div>';
echo '</div>';
}
?>
</div>
</div>


