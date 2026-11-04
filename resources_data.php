<?php
// ── Publication Stats ──
$research_stats = [
    ["num" => "120+", "label" => "Journal Articles"],
    ["num" => "250+", "label" => "Conference Papers"],
    ["num" => "15",   "label" => "Books Published"],
    ["num" => "45",   "label" => "Research Grants"]
];

// ── Journal Articles ──
$journal_articles = [
    [
        "year"     => "2025",
        "category" => "Energy Systems",
        "title"    => "Techno-Economic Analysis of Hybrid Solar-Wind Energy Storage Systems for Rural Electrification in Sri Lanka",
        "authors"  => "<strong>Gunawardena, A.</strong>, Perera, S., & Fernando, K.",
        "journal"  => "Renewable and Sustainable Energy Reviews, Vol. 198, pp. 114–128",
        "doi" => "#", "pdf" => "#", "abstract" => "#"
    ],
    [
        "year"     => "2025",
        "category" => "Fluid Mechanics",
        "title"    => "Turbulent Convective Heat Transfer in Micro-Channel Heat Sinks: Numerical Investigation",
        "authors"  => "<strong>Rathnayake, B.</strong>, & Silva, C.",
        "journal"  => "International Journal of Heat and Mass Transfer, Vol. 152",
        "doi" => "#", "pdf" => "#", "abstract" => "#"
    ],
    [
        "year"     => "2024",
        "category" => "Manufacturing",
        "title"    => "Tool Wear Prediction in CNC Turning Using Convolutional Neural Networks",
        "authors"  => "<strong>Jayasinghe, N.</strong>, & Abeysekara, T.",
        "journal"  => "Journal of Manufacturing Systems, Vol. 74, pp. 312–325",
        "doi" => "#", "pdf" => "#", "abstract" => "#"
    ],
    [
        "year"     => "2024",
        "category" => "Materials",
        "title"    => "Mechanical Characterisation of Coconut Coir / Epoxy Hybrid Composites",
        "authors"  => "<strong>Wickramasinghe, K.</strong>, & Perera, R.",
        "journal"  => "Composites Part B: Engineering, Vol. 268, pp. 111–122",
        "doi" => "#", "pdf" => "#", "abstract" => "#"
    ],
];

// ── Conference Papers ──
$conference_papers = [
    [
        "year"  => "2025",
        "type"  => "International Conference",
        "title" => "Deep Learning for Predictive Maintenance in CNC Milling: A Case Study in Sri Lankan Manufacturing",
        "authors" => "<strong>Jayasinghe, N.</strong> & Abeysekara, T.",
        "venue" => "Proceedings of the 12th International Manufacturing Science and Engineering Conference (MSEC 2025), Detroit, USA",
        "doi" => "#", "slides" => "#", "abstract" => "#"
    ],
    [
        "year"  => "2025",
        "type"  => "Regional Conference",
        "title" => "Design and Testing of a Solar-Powered Drip Irrigation Controller for Small-Scale Farming",
        "authors" => "<strong>Senanayake, I.</strong>, Gunawardena, A., & Perera, K.",
        "venue" => "Proceedings of the 8th International Conference on Sustainable Energy, Colombo, Sri Lanka",
        "doi" => "#", "slides" => "#", "abstract" => "#"
    ],
    [
        "year"  => "2024",
        "type"  => "International Conference",
        "title" => "Experimental Characterisation of Turbulent Flow in Rectangular Micro-Channels Using PIV",
        "authors" => "<strong>Ratnayake, P.</strong> & Herath, G.",
        "venue" => "Proceedings of the ASME 2024 International Mechanical Engineering Congress, Portland, USA",
        "doi" => "#", "slides" => "#", "abstract" => "#"
    ],
];

// ─────────────────────────────────────────────────────────────
//  BOOKS & BOOK CHAPTERS
//  cover_class: c1–c6   cover_icon: emoji
//  image: path to actual book cover photo (optional)
//  link: points to book-detail.php?id=...
// ─────────────────────────────────────────────────────────────
$books = [

    [
        "id"           => "fundamentals-thermal-engineering",
        "title"        => "Fundamentals of Thermal Engineering for Tropical Climates",
        "author"       => "Gunawardena, A. & Fernando, S.",
        "year"         => "2023",
        "category"     => "Textbook",
        "cover_icon"   => "📘",
        "cover_class"  => "c1",
        "image"        => "images/books/book1.jpg",   // real photo — leave "" if not available
        "link"         => "book-detail.php?id=fundamentals-thermal-engineering",

        // ── Full detail fields ──
        "publisher"    => "University of Peradeniya Press",
        "edition"      => "2nd Edition",
        "isbn"         => "978-955-589-123-4",
        "pages"        => "412",
        "language"     => "English",
        "description"  => "This textbook provides a comprehensive treatment of thermal engineering concepts tailored to tropical and sub-tropical operating conditions. Covering thermodynamics, heat transfer, and fluid mechanics, it integrates Sri Lankan industrial case studies and design examples relevant to the region's energy landscape. It is the prescribed text for the ME 2102 and ME 3206 courses at the Department.",
        "contents"     => [
            "Chapter 1 — Thermodynamic Fundamentals",
            "Chapter 2 — Properties of Pure Substances in Tropical Conditions",
            "Chapter 3 — First & Second Laws Applied to Open Systems",
            "Chapter 4 — Heat Transfer by Conduction",
            "Chapter 5 — Convection in High-Humidity Environments",
            "Chapter 6 — Radiation and Solar Thermal Systems",
            "Chapter 7 — Refrigeration & Air Conditioning for Tropical Climates",
            "Chapter 8 — Industrial Heat Exchangers — Design & Selection",
            "Chapter 9 — Energy Audit Methods for Sri Lankan Industry",
        ],
        "keywords"     => ["Thermodynamics", "Heat Transfer", "Tropical", "Textbook", "Energy"],
        "buy_links"    => [
            ["label" => "University Bookshop",   "url" => "#"],
            ["label" => "OUSL Press",             "url" => "#"],
        ],
        "access_links" => [
            ["label" => "Library Catalogue (UoP)", "url" => "#"],
            ["label" => "Google Books Preview",    "url" => "#"],
        ],
    ],

    [
        "id"           => "natural-fibre-composites",
        "title"        => "Natural Fibre Composites in Structural Engineering Applications",
        "author"       => "Wickramasinghe, K.",
        "year"         => "2024",
        "category"     => "Book Chapter",
        "cover_icon"   => "📗",
        "cover_class"  => "c2",
        "image"        => "images/books/book2.jpg",
        "link"         => "book-detail.php?id=natural-fibre-composites",

        "publisher"    => "Springer Nature",
        "edition"      => "In: Advances in Composite Materials (Ed. P. Kaur), pp. 88–124",
        "isbn"         => "978-3-031-44812-1",
        "pages"        => "37",
        "language"     => "English",
        "description"  => "This book chapter reviews the mechanical, environmental, and economic performance of natural fibre reinforced polymer composites — particularly coir, jute, and bamboo — in load-bearing structural applications. The chapter presents original experimental data and life-cycle analysis comparing natural fibre composites with conventional glass and carbon fibre systems, with a focus on viability in South Asian construction contexts.",
        "contents"     => [
            "Section 1 — Introduction to Natural Fibre Reinforced Polymers",
            "Section 2 — Fibre Extraction and Surface Treatment Methods",
            "Section 3 — Mechanical Testing — Tensile, Flexural, and Impact",
            "Section 4 — Environmental and LCA Assessment",
            "Section 5 — Structural Applications and Case Studies",
            "Section 6 — Conclusions and Future Directions",
        ],
        "keywords"     => ["Composites", "Natural Fibre", "Coir", "Structural Engineering", "Springer"],
        "buy_links"    => [
            ["label" => "Springer Link", "url" => "#"],
        ],
        "access_links" => [
            ["label" => "DOI: 10.1007/xxx", "url" => "#"],
            ["label" => "ResearchGate",     "url" => "#"],
        ],
    ],

    [
        "id"           => "robotics-automation-principles",
        "title"        => "Robotics and Automation: Principles and Applications",
        "author"       => "Perera, R. & Dissanayake, C.",
        "year"         => "2022",
        "category"     => "Reference Book",
        "cover_icon"   => "📙",
        "cover_class"  => "c3",
        "image"        => "",   // no image — will use illustrated cover
        "link"         => "book-detail.php?id=robotics-automation-principles",

        "publisher"    => "S. Godage & Brothers (Pvt) Ltd.",
        "edition"      => "1st Edition",
        "isbn"         => "978-955-30-8812-0",
        "pages"        => "336",
        "language"     => "English",
        "description"  => "A practical reference text for undergraduate and postgraduate engineers covering the fundamentals of robotic kinematics, dynamics, sensors, actuators, and control systems. The book includes worked examples, MATLAB simulations, and laboratory exercises, and is widely used in the ME 4307 Robotics & Automation course and similar courses at other Sri Lankan universities.",
        "contents"     => [
            "Chapter 1 — Introduction to Robotics and Automation",
            "Chapter 2 — Robot Kinematics — Forward and Inverse",
            "Chapter 3 — Robot Dynamics and Motion Planning",
            "Chapter 4 — Sensors, Actuators, and Drive Systems",
            "Chapter 5 — PLC Programming and Ladder Logic",
            "Chapter 6 — Robot Vision and Object Detection",
            "Chapter 7 — Collaborative Robots (Cobots)",
            "Chapter 8 — Industrial Automation Case Studies",
        ],
        "keywords"     => ["Robotics", "Automation", "Kinematics", "PLC", "Reference"],
        "buy_links"    => [
            ["label" => "Godage Bookshop", "url" => "#"],
            ["label" => "Vijitha Yapa",    "url" => "#"],
        ],
        "access_links" => [
            ["label" => "Library Catalogue (UoP)", "url" => "#"],
        ],
    ],

    [
        "id"           => "cfd-microfluidics",
        "title"        => "Computational Fluid Dynamics: Applications in Microfluidics",
        "author"       => "Ratnayake, P.",
        "year"         => "2023",
        "category"     => "Book Chapter",
        "cover_icon"   => "📕",
        "cover_class"  => "c4",
        "image"        => "images/books/book4.jpg",
        "link"         => "book-detail.php?id=cfd-microfluidics",

        "publisher"    => "Elsevier",
        "edition"      => "In: Modern CFD Methods (Ed. R. Ahmed), pp. 201–238",
        "isbn"         => "978-0-323-91234-5",
        "pages"        => "38",
        "language"     => "English",
        "description"  => "This chapter presents advanced CFD modelling approaches for microfluidic devices, including lattice-Boltzmann methods, VOF multiphase models, and electrokinetic flow simulations. Original results from the author's research in micro-channel heat exchangers and lab-on-chip diagnostic devices are presented alongside practical guidelines for mesh sensitivity and boundary condition selection.",
        "contents"     => [
            "Section 1 — Governing Equations at the Micro-Scale",
            "Section 2 — Lattice-Boltzmann Method for Micro-Channel Flow",
            "Section 3 — VOF Modelling of Two-Phase Flows",
            "Section 4 — Electrokinetic and Electro-Osmotic Flow",
            "Section 5 — Heat Transfer in Microfluidic Devices",
            "Section 6 — Validation Against Experimental PIV Data",
        ],
        "keywords"     => ["CFD", "Microfluidics", "Lattice-Boltzmann", "Heat Transfer", "Elsevier"],
        "buy_links"    => [
            ["label" => "Elsevier ScienceDirect", "url" => "#"],
        ],
        "access_links" => [
            ["label" => "DOI: 10.1016/xxx", "url" => "#"],
            ["label" => "ResearchGate",     "url" => "#"],
        ],
    ],

];

// ── Magazines & Technical Articles ──
$magazines = [
    [
        "title"        => "The Future of Manufacturing in Sri Lanka: An Industry 4.0 Perspective",
        "author"       => "Jayasinghe, N. — Engineer Magazine, IESL, 2024",
        "category"     => "Magazine Article",
        "cover_icon"   => "📰",
        "cover_class"  => "c2",
        "link"         => "#"
    ],
    [
        "title"        => "Renewable Energy Roadmap for Sri Lankan Universities",
        "author"       => "Gunawardena, A. — Sustainability Sri Lanka, Vol. 6, 2023",
        "category"     => "Magazine Article",
        "cover_icon"   => "📰",
        "cover_class"  => "c3",
        "link"         => "#"
    ],
];

// ── Research Bulletins ──
$bulletins = [
    [
        "vol" => "12", "year" => "2025", "issue" => "1",
        "title" => "ME Research Bulletin — Volume 12, Issue 1 (2025)",
        "desc"  => "Features the NSF-funded hybrid energy storage project, DLR collaboration highlights, and symposium reports.",
        "tags"  => ["Energy", "CFD", "Symposium"],
        "pdf" => "#", "online" => "#"
    ],
    [
        "vol" => "11", "year" => "2024", "issue" => "2",
        "title" => "ME Research Bulletin — Volume 11, Issue 2 (2024)",
        "desc"  => "Covers advances in natural fibre composites, CNC tool wear research, and postgraduate thesis highlights.",
        "tags"  => ["Composites", "Manufacturing", "Postgraduate"],
        "pdf" => "#", "online" => "#"
    ],
];
?>
