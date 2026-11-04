<?php
// Banner options: gold, blue, dark, or empty string for maroon

$all_events = [

    [
        "id"       => "ai-in-mechanical-engineering-design",
        "day"      => "05",
        "month"    => "Jun",
        "year"     => "2026",
        "time"     => "2:00 PM – 4:00 PM",
        "type"     => "Guest Lecture",
        "venue"    => "Seminar Room 2, ME Building",
        "title"    => "Artificial Intelligence in Mechanical Engineering Design",
        "desc"     => "A guest lecture by Dr. Kavindu Liyanage on the applications of AI and machine learning tools in structural analysis.",
        "link"     => "event-detail.php?id=ai-in-mechanical-engineering-design",
        "banner"   => "gold",

        // ── Full event content ──
        "status"       => "Upcoming",           // Upcoming | Ongoing | Past
        "capacity"     => "80 seats",
        "registration" => true,
        "reg_deadline" => "02 Jun 2026",
        "reg_link"     => "#",
        "organiser"    => "Department of Mechanical Engineering",
        "contact"      => "mech@eng.pdn.ac.lk",
        "tags"         => ["Guest Lecture", "AI", "Machine Learning"],

        "about" => "This guest lecture explores the rapidly growing intersection of artificial intelligence and mechanical engineering design. Dr. Kavindu Liyanage, currently a Senior Research Scientist at the Singapore Institute of Manufacturing Technology (SIMTech), will present a comprehensive overview of how deep learning, reinforcement learning, and generative AI models are being applied to structural analysis, topology optimisation, and predictive maintenance.",

        "agenda" => [
            ["time" => "2:00 PM", "item" => "Welcome & Introduction by Head of Department"],
            ["time" => "2:10 PM", "item" => "Lecture Part I — AI Fundamentals for Engineers"],
            ["time" => "2:50 PM", "item" => "Lecture Part II — Case Studies in Structural Analysis & Topology Optimisation"],
            ["time" => "3:30 PM", "item" => "Q&A Session"],
            ["time" => "3:55 PM", "item" => "Networking & Refreshments"],
        ],

        "speaker" => [
            "name"        => "Dr. Kavindu Liyanage",
            "title"       => "Senior Research Scientist, SIMTech, Singapore",
            "bio"         => "Dr. Liyanage holds a PhD in Computational Mechanics from the National University of Singapore and has over 12 years of experience applying machine learning to engineering design problems. He has published over 40 peer-reviewed articles and holds 3 patents in AI-assisted design tools.",
        ],

        "audience"   => "Open to all ME undergraduate and postgraduate students, academic staff, and interested participants from other departments. Industry guests are welcome.",
        "notes"      => "Light refreshments will be provided. Certificates of participation will be issued to registered attendees.",
    ],

    [
        "id"       => "mes-sports-day-2026",
        "day"      => "15",
        "month"    => "Jun",
        "year"     => "2026",
        "time"     => "8:00 AM – 5:00 PM",
        "type"     => "MES Sports Day",
        "venue"    => "University Sports Grounds, Peradeniya",
        "title"    => "Annual MES Sports Day 2026",
        "desc"     => "The annual inter-batch sports competition organized by the Mechanical Engineering Society.",
        "link"     => "event-detail.php?id=mes-sports-day-2026",
        "banner"   => "",

        "status"       => "Upcoming",
        "capacity"     => "Open to all ME students",
        "registration" => true,
        "reg_deadline" => "10 Jun 2026",
        "reg_link"     => "#",
        "organiser"    => "Mechanical Engineering Society (MES)",
        "contact"      => "mes@eng.pdn.ac.lk",
        "tags"         => ["Sports", "MES", "Social"],

        "about" => "The Annual MES Sports Day is one of the most anticipated events in the ME Department calendar, bringing together students from all four undergraduate batches for a full day of friendly competition, team spirit, and camaraderie. Events span cricket, football, volleyball, badminton, athletics, and novelty games.",

        "agenda" => [
            ["time" => "8:00 AM",  "item" => "Registration & Team Assembly"],
            ["time" => "8:30 AM",  "item" => "Opening Ceremony & Flag Hoisting"],
            ["time" => "9:00 AM",  "item" => "Field Events Begin — Athletics & Team Sports"],
            ["time" => "12:30 PM", "item" => "Lunch Break"],
            ["time" => "1:30 PM",  "item" => "Finals — Football, Volleyball & Badminton"],
            ["time" => "4:00 PM",  "item" => "Novelty Events & Fun Games"],
            ["time" => "4:45 PM",  "item" => "Prize-Giving Ceremony"],
            ["time" => "5:00 PM",  "item" => "Close"],
        ],

        "speaker"    => null,
        "audience"   => "All ME undergraduate students. Family members and friends are welcome as spectators.",
        "notes"      => "Participants are advised to wear sports attire. All teams must register by the deadline. Transportation from the ME building will be arranged.",
    ],

    [
        "id"       => "international-research-symposium-2026",
        "day"      => "28",
        "month"    => "Jun",
        "year"     => "2026",
        "time"     => "9:00 AM – 5:30 PM",
        "type"     => "Symposium",
        "venue"    => "Faculty of Engineering Auditorium",
        "title"    => "International Research Symposium on Advanced Manufacturing 2026",
        "desc"     => "A one-day international symposium featuring keynote speakers from Germany, Australia, and Japan presenting on advanced manufacturing, composites, and smart production systems.",
        "link"     => "event-detail.php?id=international-research-symposium-2026",
        "banner"   => "dark",

        "status"       => "Upcoming",
        "capacity"     => "200 seats",
        "registration" => true,
        "reg_deadline" => "20 Jun 2026",
        "reg_link"     => "#",
        "organiser"    => "Department of Mechanical Engineering, University of Peradeniya",
        "contact"      => "mech@eng.pdn.ac.lk",
        "tags"         => ["Symposium", "Manufacturing", "International", "Research"],

        "about" => "The International Research Symposium on Advanced Manufacturing 2026 is a flagship academic event hosted by the Department of Mechanical Engineering, University of Peradeniya. The symposium will bring together leading researchers and industry practitioners from Germany, Australia, Japan, and Sri Lanka to present cutting-edge work in advanced manufacturing technologies, composite materials, and Industry 4.0 production systems.",

        "agenda" => [
            ["time" => "9:00 AM",  "item" => "Registration & Welcome Tea"],
            ["time" => "9:30 AM",  "item" => "Opening Address — Vice Chancellor, University of Peradeniya"],
            ["time" => "10:00 AM", "item" => "Keynote I — Prof. Hans-Werner Müller (DLR, Germany): CFRP Manufacturing for Aerospace"],
            ["time" => "11:00 AM", "item" => "Keynote II — Prof. Sarah O'Brien (Monash University): Smart Additive Manufacturing"],
            ["time" => "12:00 PM", "item" => "Lunch Break"],
            ["time" => "1:00 PM",  "item" => "Keynote III — Prof. Hiroshi Tanaka (Tokyo Institute of Technology): Precision Micro-Machining"],
            ["time" => "2:00 PM",  "item" => "Paper Presentations — Session A: Composites & Materials"],
            ["time" => "3:00 PM",  "item" => "Paper Presentations — Session B: Digital Manufacturing & Simulation"],
            ["time" => "4:00 PM",  "item" => "Panel Discussion — The Future of Manufacturing in South Asia"],
            ["time" => "5:00 PM",  "item" => "Closing Remarks & Networking"],
        ],

        "speaker" => [
            "name"  => "Multiple Keynote Speakers",
            "title" => "Prof. H-W. Müller (DLR) · Prof. S. O'Brien (Monash) · Prof. H. Tanaka (Tokyo Tech)",
            "bio"   => "The symposium features three international keynote speakers from Germany, Australia, and Japan, alongside paper presentations by local and international researchers.",
        ],

        "audience" => "Academic staff, postgraduate students, final-year undergraduates, and industry professionals. Abstract submissions for paper presentations are open until 15 June 2026.",
        "notes"    => "Best Paper Awards will be presented in each session. Proceedings will be published in the Department's Research Bulletin. Conference attire is expected.",
    ],

];
?>
