<?php
$professors = [
    [
        "name" => "Prof. Primal Fernando",
        "initials" => "PF",
        "image" => "images/academic/pro.primal.jpg",
        "specialization" => "Fluid Mechanics, Turbomachinery, CFD",
        "profile_link" => "#",
        "research_link" => "#",
        "email" => "mailto:rd@example.com"
    ],
    [
        "name" => "Prof. Kamani Perera",
        "initials" => "KP",
        "image" => "",
        "specialization" => "Manufacturing Engineering, Lean Systems, Quality Control",
        "profile_link" => "#",
        "research_link" => "#",
        "email" => "mailto:kp@example.com"
    ],
    [
        "name" => "Prof. Suresh Weerasinghe",
        "initials" => "SW",
        "image" => "",
        "specialization" => "Thermodynamics, Heat Transfer, Renewable Energy",
        "profile_link" => "#",
        "research_link" => "#",
        "email" => "mailto:sw@example.com"
    ]
];


$senior_lecturers = [
    
    [
        "name" => "Dr. Nalaka Jayasena",
        "initials" => "NJ",
        "image" => "",
        "specialization" => "Robotics, Mechatronics, Control Systems",
        "profile_link" => "#", 
        "research_link" => "#", "email" => 
        "mailto:nj@eng.pdn.ac.lk"
    ],
    

];



$lecturers = [
    [
        "name" => "Mr. Tharanga Wickramasinghe",
        "initials" => "TW",
        "image" => "",
        "specialization" => "CAD/CAM, Product Design, Rapid Prototyping",
        "rank" => "Lecturer",
        "has_research" => false,
        "profile_link" => "#",
        "email" => "mailto:tw@eng.pdn.ac.lk"
    ],
    [
        "name" => "Ms. Ishara Bandara",
        "initials" => "IB",
        "image" => "",
        "specialization" => "Engineering Dynamics, Vibrations, Machine Design",
        "rank" => "Lecturer",
        "has_research" => false,
        "profile_link" => "#",
        "email" => "mailto:ib@eng.pdn.ac.lk"
    ]
    
];



// Administrative Staff Data
$admin_staff = [
    [
        "name" => "Mrs. Dilrukshi Perera",
        "designation" => "Senior Assistant Registrar",
        "division" => "Administration",
        "ext" => "3640",
        "email" => "admin.mech@eng.pdn.ac.lk"
    ],
    [
        "name" => "Mr. Roshan Kumara",
        "designation" => "Management Assistant",
        "division" => "Administration",
        "ext" => "3641",
        "email" => "roshan.k@eng.pdn.ac.lk"
    ],
    // Add more administrative staff here
];

// Technical Staff Data
$technical_staff = [
    [
        "name" => "Mr. Nimal Jayasuriya",
        "designation" => "Technical Officer Gr. I",
        "lab" => "Fluid Mechanics Lab",
        "ext" => "3650",
        "email" => "nimal.j@eng.pdn.ac.lk"
    ],
    [
        "name" => "Mr. Asanka Fernando",
        "designation" => "Technical Officer Gr. I",
        "lab" => "Materials Lab",
        "ext" => "3651",
        "email" => "asanka.f@eng.pdn.ac.lk"
    ],
    // Add more technical staff here
];


// Visiting Staff Data
$visiting_staff = [
    [
        "name" => "Dr. Thilina Wickramarachchi",
        "designation" => "Visiting Lecturer",
        "modules" => "Advanced Robotics, Machine Learning for Engineers",
        "period" => "Jan – Jun 2025"
    ],
    [
        "name" => "Eng. Dhanushka Jayaratne",
        "designation" => "Industry Practitioner",
        "modules" => "Industrial Automation & PLC Systems",
        "period" => "Feb – May 2025"
    ],
    [
        "name" => "Dr. Anoma Wijewardena",
        "designation" => "Visiting Lecturer",
        "modules" => "Environmental Impact of Engineering, Green Manufacturing",
        "period" => "Jan – Apr 2025"
    ],
    [
        "name" => "Eng. Kasun Ratnayake",
        "designation" => "Industry Practitioner",
        "modules" => "Project Management for Engineers",
        "period" => "Mar – Jun 2025"
    ]
];

// Temporary Instructors Data
$temp_instructors = [
    [
        "name" => "Mr. Sithum Perera",
        "role" => "Temporary Instructor",
        "assignment" => "Workshop Technology Demonstrations",
        "period" => "Jan – Dec 2025"
    ],
    [
        "name" => "Ms. Piyumi Amaratunga",
        "role" => "Teaching Assistant",
        "assignment" => "Fluid Mechanics Laboratory Sessions",
        "period" => "Jan – Jun 2025"
    ],
    [
        "name" => "Mr. Dulith Bandara",
        "role" => "Teaching Assistant",
        "assignment" => "Engineering Mathematics Tutorials",
        "period" => "Jan – Jun 2025"
    ],
    [
        "name" => "Mr. Dulith Bandara",
        "role" => "Teaching Assistant",
        "assignment" => "Engineering Mathematics Tutorials",
        "period" => "Jan – Jun 2025"
    ]
];


// Key Contacts Directory Data
$key_contacts = [
    [
        "title" => "Prof. Ajith Gunawardena",
        "role" => "HEAD OF DEPARTMENT",
        "phone" => "+94 81 239 3631",
        "email" => "hod.mech@eng.pdn.ac.lk"
    ],
    [
        "title" => "Mrs. Dilrukshi Perera",
        "role" => "SENIOR ASSISTANT REGISTRAR",
        "phone" => "Ext. 3640",
        "email" => "admin.mech@eng.pdn.ac.lk"
    ],
    [
        "title" => "Undergraduate Academic Office",
        "role" => "UG PROGRAMMES & ADMISSIONS",
        "phone" => "Ext. 3642",
        "email" => "ug.mech@eng.pdn.ac.lk"
    ],
    [
        "title" => "Postgraduate Office",
        "role" => "PG PROGRAMMES & RESEARCH",
        "phone" => "Ext. 3643",
        "email" => "pg.mech@eng.pdn.ac.lk"
    ],
    [
        "title" => "Main Workshop",
        "role" => "WORKSHOP SUPERVISOR — MR. RUWAN SENANAYAKE",
        "phone" => "Ext. 3655",
        "email" => "ruwan.s@eng.pdn.ac.lk"
    ],
    [
        "title" => "Fluid Mechanics Laboratory",
        "role" => "TECHNICAL OFFICER — MR. NIMAL JAYASURIYA",
        "phone" => "Ext. 3650",
        "email" => "nimal.j@eng.pdn.ac.lk"
    ],
    [
        "title" => "Materials Laboratory",
        "role" => "TECHNICAL OFFICER — MR. ASANKKA FERNANDO",
        "phone" => "Ext. 3651",
        "email" => "asanka.f@eng.pdn.ac.lk"
    ],
    [
        "title" => "Robotics Laboratory",
        "role" => "TECHNICAL OFFICER — MRS. NADEESHA RATHNAYAKE",
        "phone" => "Ext. 3653",
        "email" => "nadeesha.r@eng.pdn.ac.lk"
    ],
    [
        "title" => "Computer Laboratory",
        "role" => "COMPUTER TECHNICIAN — MR. HARSHA GUNAWARDENA",
        "phone" => "Ext. 3656",
        "email" => "harsha.g@eng.pdn.ac.lk"
    ]
];


// Vacancies Data
$vacancies = [
    [
        "title" => "Lecturer / Senior Lecturer in Mechanical Engineering",
        "type_tag" => "Academic",
        "type_class" => "tag-academic",
        "status_tag" => "Open",
        "status_class" => "tag-open",
        "description" => "The Department invites applications for a permanent academic position at Lecturer or Senior Lecturer level. Candidates with expertise in Robotics, Mechatronics, or Renewable Energy Systems are especially encouraged to apply.",
        "closing_date" => "30 June 2025",
        "apply_link" => "#",
        "is_open" => true
    ],
    [
        "title" => "Research Fellow — Renewable Energy Systems",
        "type_tag" => "Academic",
        "type_class" => "tag-academic",
        "status_tag" => "Open",
        "status_class" => "tag-open",
        "description" => "A two-year research fellowship funded under the NSF-HETC joint research programme. Candidates must hold a PhD in Mechanical or Energy Engineering with a demonstrated publication record.",
        "closing_date" => "15 May 2025",
        "apply_link" => "#",
        "is_open" => true
    ],
    [
        "title" => "Technical Officer — Robotics & Automation Laboratory",
        "type_tag" => "Technical",
        "type_class" => "tag-technical",
        "status_tag" => "Open",
        "status_class" => "tag-open",
        "description" => "The Department seeks a qualified Technical Officer to manage the Robotics Laboratory. Applicants should have an HND in Electronics or Mechatronics with at least 2 years relevant experience.",
        "closing_date" => "20 May 2025",
        "apply_link" => "#",
        "is_open" => true
    ]
];
?>