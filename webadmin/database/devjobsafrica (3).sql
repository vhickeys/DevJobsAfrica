-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2024 at 08:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devjobsafrica`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied_jobs`
--

CREATE TABLE `applied_jobs` (
  `id` int(11) NOT NULL,
  `job_userId` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applied_jobs`
--

INSERT INTO `applied_jobs` (`id`, `job_userId`, `job_id`, `date`) VALUES
(1, 8, 2, '2024-07-08 18:50:55');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `caption` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `job_type` varchar(255) DEFAULT NULL,
  `career_level` varchar(255) DEFAULT NULL,
  `education_level` varchar(255) DEFAULT NULL,
  `years_of_experience` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `sector_id`, `title`, `slug`, `caption`, `description`, `company`, `salary`, `image`, `job_type`, `career_level`, `education_level`, `years_of_experience`, `location`, `deadline`, `status`, `date`) VALUES
(1, 2, 'Senior Program Officer', 'senior-program-officer', 'RTI seeks a Senior Program Officer (SPO) who will work directly under the supervision of the Implementation Manager to coordinate with Federal and State Ministries of Health, and other Act | East partners in providing oversight during planning, implementation, monitoring and reporting of Act I East program activities. The SPO will work closely with the Program Officer, the MERLA Manager, and the Finance & Administration Manager on a day-to-day basis, to support effective implementation of Act | East contributions to the national NTD program. RTI International is always seeking to expand its portfolio. This position may be expected to support additional projects expansion role if awarded.', '<p><strong><strong>Research Triangle Institute (RTI)</strong></strong>&nbsp;has over 30 years&#39; experience assisting governments, communities, and the private sector. As a not-for-profit, independent research institute based in North Carolina, USA, RTI has roughly 6,000 employees with global experience implementing international development projects. RTI&#39;s Sustainable Growth &amp; Resilience (SG&amp;R) technical unit within the International Development Group brings together RTI experts and capabilities across food security, agriculture, energy, environment, water, governance, and economic opportunity. SG&amp;R will leverage RTI&#39;s experience designing and delivering multisectoral programming and technical solutions to respond to climate change, build resilience, and promote economic growth around the world.</p>\r\n\r\n<p><strong><strong>IDG&#39;s The Global Health Division (GHD),</strong></strong>&nbsp;works in Malaria and Neglected Tropical Diseases; Global Health Security and Public Health Preparedness; Noncommunicable Diseases: Heath Systems Strengthening - including Health Governance, Health Finance, Human Resources for Health, Capacity Building, and Health Policy and Advocacy; and Integrated Care - including Reproductive, Maternal, and Child Health and Family Planning. We address a range of public health problems to reduce disparities, lower disease burdens, and build locally owned sustainable health programs.</p>\r\n\r\n<p><strong><strong>Project Description</strong></strong></p>\r\n\r\n<p><strong><strong>Act to End Neglected Tropical Diseases (NTD) | East</strong></strong>&nbsp;, is an eight-year (2018 - 2026) project, funded by the United States Agency for International Development (USAID) through which RTI International supports through which RTI supports and expands Neglected Tropical Disease (NTD) control and elimination in priority countries including Nigeria. The Project Goal is to support the government of NTD endemic countries to control and/or eliminate NTDs with proven, cost-effective public health interventions. To learn more about Act | East&#39;s work, visit www.acteast.org .</p>\r\n\r\n<p>Working with the Federal and State Ministries of Health in Nigeria, the project provides funding and technical support for the implementation of elimination activities for five targeted NTDs: lymphatic filariasis, onchocerciasis, schistosomiasis, soil-transmitted helminths, and trachoma. The project works through the NTD units at national, state and LGA levels to deliver its&#39; mandate of NTD control and elimination.</p>\r\n\r\n<p><strong><strong>Position Description</strong></strong></p>\r\n\r\n<p>RTI seeks a Senior Program Officer (SPO) who will work directly under the supervision of the Implementation Manager to coordinate with Federal and State Ministries of Health, and other Act | East partners in providing oversight during planning, implementation, monitoring and reporting of Act I East program activities. The SPO will work closely with the Program Officer, the MERLA Manager, and the Finance &amp; Administration Manager on a day-to-day basis, to support effective implementation of Act | East contributions to the national NTD program. RTI International is always seeking to expand its portfolio. This position may be expected to support additional projects expansion role if awarded.</p>\r\n\r\n<p>The position will be based in Abuja, Nigeria, and will report to the Implementation Manager.</p>\r\n\r\n<p><strong><strong>Responsibilities</strong></strong></p>\r\n\r\n<p><strong><strong>Programmatic Functions (Planning, Coordination of Implementation and Reporting)</strong></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Under the direction of the Implementation Manager (IM), the SPO will provide technical support, supervise and monitor Act | East&#39;s field activities for reporting on progress measured against expected results noted in the Nigeria Act | East annual work plan.</li>\r\n	<li>&nbsp;Coordinate with Federal and State Ministries of Health in planning and preparation of meetings as required with Act | East counterparts such as zonal review meetings, technical working groups and expert committee meetings, along with project supervisory visits to assess progress against the expected results noted within Act | East&#39;s annual work plan.</li>\r\n	<li>&nbsp;Contribute to technical activities based on the program&#39;s strategic directions, this includes developing implementation plans for nation-wide scale-up of Disease Specific Assessments (DSAs) for Lymphatic Filariasis (LF) and Onchocerciasis (OV), and for Post-Transmission Surveillance preparedness for states completing assessments.</li>\r\n	<li>&nbsp;In collaboration with key stakeholders, provide technical support for the planning, implementation, monitoring and reporting processes for the scale-down of mass drug administration (MDA) for onchocerciasis and lymphatic filariasis in endemic areas.</li>\r\n	<li>&nbsp;Ensure the development and adherence to workplans and budgets for the achievement of planned project outputs and targets for all Act | East projects in Nigeria.</li>\r\n	<li>&nbsp;Coordinate capacity building initiatives as may be required for government partners at LGA, State and National levels.</li>\r\n	<li>&nbsp;Work with the Implementation Manager to coordinate and ensure the completion of annual work plans, semi-annual reports, and monthly updates.</li>\r\n	<li>&nbsp;Support the Implementation Manager in ensuring adherence to all donor requirements in program implementation and reporting.</li>\r\n</ul>\r\n\r\n<p><strong><strong>Program Monitoring Functions</strong></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Support the implementation Manager, and work with the MERLA Manager, on internal and external evaluations on the outcomes of program activities as established during the planning phase; and to disseminate findings.</li>\r\n	<li>&nbsp;Work with the MERLA Manager to develop protocols for disease-specific assessments, coverage evaluation surveys and the respective reports., in collaboration with the FMOH, SMOH, and HQ-based program staff.</li>\r\n</ul>\r\n\r\n<p><strong><strong>Program Advocacy and Strategic Alliances</strong></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Support the Implementation Manager and the COP (Chief of Party) to build and maintain meaningful working relationships with both government and key program stakeholders at all levels to strengthen opportunities for advocacy for Act | East project.</li>\r\n	<li>&nbsp;Represent Act | East among local partners and at other appropriate fora, as may be requested by the Implementation Manager or the COP. ePICWiW B2Ncor</li>\r\n	<li>&nbsp;Carry out additional tasks and support to other senior officer(s) of the Federal and State Ministry of Health, as may be requested by the Implementation Manager or the COP.</li>\r\n</ul>\r\n\r\n<p><strong><strong>Qualifications</strong></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Masters degree and 3 years of experience in NTD or Bachelor degree and 5 years of experience in NTD.</li>\r\n	<li>&nbsp;Prior experience with USAID funded programs or RTI Projects will be an added advantage.</li>\r\n	<li>&nbsp;Experience in logistics and supply chain management, preferably for NTD commodities in Nigeria</li>\r\n	<li>&nbsp;Good understanding of the health system structure and NTD intervention environment in Nigeria</li>\r\n	<li>&nbsp;Extensive field experience in targeted districts and solid understanding of the realities and complexities of working in hard-to-reach villages with marginalized and disadvantaged groups.</li>\r\n	<li>&nbsp;Demonstrated experience in managing M&amp;E activities.</li>\r\n	<li>&nbsp;Demonstrated experience in the implementation of community-based programs.</li>\r\n	<li>&nbsp;Program and Administrative experience, preferably for an organization implementing international programs in developing country settings.</li>\r\n	<li>&nbsp;Ability to interact with staff at all levels in a fast-paced environment, sometimes under pressure, and be proactive, resourceful, efficient, and ability to manage stress, with a high level of integrity and professionalism.</li>\r\n	<li>&nbsp;Excellent oral and written communication skills in English; and ability to communicate respectfully in a multi-cultural environment</li>\r\n	<li>&nbsp;Excellent organizational skills and attention to detail.</li>\r\n	<li>&nbsp;Excellent active learner, critical thinking and open minded.</li>\r\n	<li>&nbsp;Demonstrated experience in Microsoft Office, including Word, Power Point, and Excel.</li>\r\n	<li>&nbsp;Willingness to travel within Nigeria up to 50% of the time.</li>\r\n</ul>\r\n', NULL, 0, NULL, 'Full time', 'Mid-Level', 'Masters Degree', '3 Years', 'Abuja', '2024-05-09', 0, '2024-06-14 12:03:19'),
(2, 2, 'Program Coordinator', 'program-coordinator', 'We are the largest nonprofit fighting poverty, disease, and inequity around the world. Founded on a simple premise: people everywhere, regardless of identity or circumstances, should have the chance to live healthy, productive lives. We believe our employees should reflect the rich diversity of the global populations we aim to serve. We provide an exceptional benefits package to employees and their families which include comprehensive medical, dental, and vision coverage with no premiums, generous paid time off, paid family leave, foundation-paid retirement contribution, regional holidays, and opportunities to engage in several employee communities. As a workplace, we\'re committed to creating an environment for you to thrive both personally and professionally.', '<p><strong><strong>The Foundation</strong></strong></p>\r\n\r\n<p>We are the largest nonprofit fighting poverty, disease, and inequity around the world. Founded on a simple premise: people everywhere, regardless of identity or circumstances, should have the chance to live healthy, productive lives. We believe our employees should reflect the rich diversity of the global populations we aim to serve. We provide an exceptional benefits package to employees and their families which include comprehensive medical, dental, and vision coverage with no premiums, generous paid time off, paid family leave, foundation-paid retirement contribution, regional holidays, and opportunities to engage in several employee communities. As a workplace, we&#39;re committed to creating an environment for you to thrive both personally and professionally.</p>\r\n\r\n<p><strong><strong>The Team</strong></strong></p>\r\n\r\n<p>The Nigeria Country Office team we use our core comparative advantages to drive impact across the 4 focus areas of the Foundation. We make key investments and lead advocacy in our focus areas to help achieve specific national outcomes that address Nigeria&#39;s developmental challenges. We adopt a one-foundation approach in our work and collaborate with government entities, donors and other partners in driving a joint vision for Nigeria.</p>\r\n\r\n<p>The Program Coordinator will report to the Senior Officer, Strategy, Planning and Management, Nigeria Country Office.</p>\r\n\r\n<p><strong><strong>Application deadline: June 14th, 2024.</strong></strong></p>\r\n\r\n<p><strong><strong>Your Role</strong></strong></p>\r\n\r\n<p>The primary purpose of this job is to support the Nigeria Country Office with the coordination, implementation, and maintenance of a range of projects and activities in support of the life cycle of grants and contracts. This includes managing a portfolio of investments comprised of grants, contracts, and other projects in support of multiple programmatic priorities and strategic goals. The focus of the Africa team is to enable collective impact for the foundation in Africa by influencing policy and finance towards key development priorities, strengthening capacity, and enabling systems for delivery, and innovating and using cross-cutting enablers for impact at scale. The Program Coordinator (PC) will provide budget oversight and planning, financial analysis, financial reporting, and/or portfolio and operations process management and act a bridge between the NCO team and the business support functions in Seattle.</p>\r\n\r\n<p><strong><strong>What You&#39;ll Do</strong></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Grant and Contracts Coordination: Coordinate the end-to-end grants and contracts processes with internal parties (program team, business partners, accounting department) and external parties (grantees, contractors &amp; vendors) within the investment systems. Shepherd the development, management, and close out of grants and contracts. Coordinate contracts, including tracking of invoicing and deliverables, receipt of required reports and monitoring expenses.</li>\r\n	<li>&nbsp;Grants and Contracts Administration: Work with program officers, grantees, contractors, vendors, and business partners during early stages of investment making (e.g. assist in investment structuring, send out requests for proposals, drive key deadlines for submissions and revisions, coordinate the consolidation and resolution of feedback). Assist with grant management and evaluation by requesting and reviewing written materials (including grant summaries and reports). Conduct budget analyses for grant and contract proposals and grant annual reports to ensure consistency with project objectives and alignment with strategic priorities.</li>\r\n	<li>&nbsp;Data Input, Management and Analysis: Manage data for all grants and contracts in investment management system and SharePoint sites. Provide detailed financial analysis of portfolio and ensure data integrity to support team&#39;s financial decision making. Work with manager and other Program Officers to keep all pertinent information accurate and up to date for reporting and analysis; serve as point-person regarding budget targets and individual investment portfolio management.</li>\r\n	<li>&nbsp;Initiative Portfolio Management: Monitor/Manage progress of an initiative portfolio against payout targets. Track programmatic goals and results in coordination with leadership. Develop relationships with key internal and external partners. Work with leadership to develop processes and tools for performance management.</li>\r\n	<li>&nbsp;General: Serve as liaison across multiple internal teams. Support new hire onboarding on investment workflow and data systems. Assists program team with annual pipeline planning and support additional team projects as assigned by the manager, ECO. Serves as subject matter expert on processes, tools, systems, templates and provides training, ongoing coaching and process change support to program team and external partners to ensure successful adoption and sustained use.</li>\r\n</ul>\r\n\r\n<p><strong><strong>Your Experience</strong></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Bachelor&#39;s degree in business, Accounting, Finance, or similar fields, with minimum of 3 years of relevant experience in a similar role is desirable.</li>\r\n	<li>&nbsp;Project management, portfolio management, program management, financial management, financial reporting, non-profit or related industry or business experience is preferred. ePDfPP3 B2Ncor</li>\r\n	<li>&nbsp;Demonstrates ability to handle higher volume or complex portfolios and able to distil what is needed next, even without expertise in programmatic content. Recognizes complexity and assesses risks and alternatives considering competing requirements and incomplete knowledge.</li>\r\n	<li>&nbsp;Demonstrates expert knowledge of, and work across multiple investment-making systems, based in Access, Excel, SharePoint, and other web-based software applications. Basic SharePoint site administration skills, including metadata tagging, document view creation, archiving, and creating and maintaining confidential files.</li>\r\n	<li>&nbsp;Knowledge of applicable programmatic subject, budgeting, financial analysis and synthesis.</li>\r\n	<li>&nbsp;Ability to work with flexibility, efficiency, and diplomacy in a fast-paced, challenging environment. Open to rapid change and able to learn new things quickly.</li>\r\n	<li>&nbsp;Ability to communicate effectively (verbal and written) with internal and external partners and can train them in the use of foundation processes and tools. Uses discretion in communicating internally and externally and maintain confidentiality when appropriate.</li>\r\n	<li>&nbsp;Excellent organization skills &amp; attention to detail, proactive, deadlines &amp; policy compliance.</li>\r\n	<li>&nbsp;Demonstrates effectiveness influencing individuals and teams without explicit authority.</li>\r\n	<li>&nbsp;Ability to work independently and as part of an integrated, diverse team and be comfortable in multiple, high varied settings, and tight deadlines with different work and learning styles.</li>\r\n</ul>\r\n\r\n<p><strong><strong>Other Attributes</strong></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Ability to travel up to 25% domestically and internationally.</li>\r\n	<li>&nbsp;Comfortable in a wide range of cultural, geographic, and operational situations, demonstrating culturally sensitive behaviour with a diverse range of people.</li>\r\n</ul>\r\n\r\n<p>*Must be able to legally work in the country where this position is located without visa sponsorship.</p>\r\n\r\n<p><strong><strong>Hiring Requirements</strong></strong></p>\r\n\r\n<p>As part of our standard hiring process for new employees, employment will be contingent upon successful completion of a background check.</p>\r\n\r\n<p><strong><strong>Candidate Accommodations</strong></strong></p>\r\n\r\n<p>If you require assistance due to a disability in the application or recruitment process, please submit a request here.</p>\r\n\r\n<p><strong><strong>Inclusion Statement</strong></strong></p>\r\n\r\n<p>We are dedicated to the belief that all lives have equal value. We strive for a global and cultural workplace that supports ever greater diversity, equity, and inclusion &mdash; of voices, ideas, and approaches &mdash; and we support this diversity through all our employment practices.</p>\r\n\r\n<p>All applicants and employees who are drawn to serve our mission will enjoy equality of opportunity and fair treatment without regard to race, color, age, religion, pregnancy, sex, sexual orientation, disability, gender identity, gender expression, national origin, genetic information, veteran status, marital status, and prior protected activity.</p>\r\n', NULL, 500000, NULL, 'Full time', 'Mid-Level', 'Bachelors Degree', '2 Years', 'Abidjan', '2024-10-19', 0, '2024-06-14 12:13:09'),
(3, 1, 'Programme Finance Officer', 'programme-finance-officer', 'CBM (registered as CBM Christoffel-Blindenmission Christian Blind Mission e.V.) is an international development organisation committed to improving the quality of life of persons with disabilities in the persons communities of the world. Based on our Christian values and more than 100 years of professional expertise, we address poverty as a cause and a consequence of disability. We work in partnership to create an inclusive society for all.', '<ul>\r\n	<li>&nbsp;Work experience</li>\r\n	<li>&nbsp;Finance, Controlling</li>\r\n	<li>&nbsp;Fulltime</li>\r\n	<li>&nbsp;Published: 2024-05-30</li>\r\n	<li>&nbsp;published till: 2026-06-14</li>\r\n</ul>\r\n\r\n<p><strong><strong>About CBM</strong></strong></p>\r\n\r\n<p>CBM (registered as CBM Christoffel-Blindenmission Christian Blind Mission e.V.) is an international development organisation committed to improving the quality of life of persons with disabilities in the persons communities of the world. Based on our Christian values and more than 100 years of professional expertise, we address poverty as a cause and a consequence of disability. We work in partnership to create an inclusive society for all.</p>\r\n\r\n<p><strong><strong>To expand our Nigerian Country Office team, we are looking for a Program Finance Officer.</strong></strong></p>\r\n\r\n<p><strong><strong>The position is a Fulltime position of 40hours/week.</strong></strong></p>\r\n\r\n<p><strong><strong>This position is only filled locally, with contractual conditions of Nigeria. This is not an expatriate role.</strong></strong></p>\r\n\r\n<p><strong><strong>These are your responsibilities</strong></strong></p>\r\n\r\n<p>The overall role of the Programme Finance Officer involves participating in the Country Office programme budget implementation, focusing on monitoring, reporting, evaluating and maintaining of programme budget related documents and ensuring their proper filing and timely submission to stakeholders.</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Overseeing and coordinating the finance and accounting for project partners.</li>\r\n	<li>&nbsp;Providing timely project budget implementation feedback to PARTNERS&#39; senior management and support in the monitoring of programs.</li>\r\n	<li>&nbsp;Set-up PARTNERS&#39; financial system in line with CBM CO financial processes and procedures</li>\r\n	<li>&nbsp;Review periodical programme funds reconciliation statements and financial reports (including PPR) of PARTNERS in coordination with the PARTNERS finance team to ensure completeness and accuracy of financial reports.</li>\r\n	<li>&nbsp;Assist in financial reviews and audits of PARTNERS and suggest corrective action as appropriate on areas in PARTNERS&#39;s financial systems and procedures that need improvement.</li>\r\n	<li>&nbsp;Contribute to the development of Terms of Reference for project audits and ensure that CBMs accountability requirements are incorporated in the TORs.</li>\r\n	<li>&nbsp;Identify red-flag in PARTNERS&#39;s transactions and processes, compile the red-flag reports and checklists, provide regular updates to the CO Comic Relief program management team.</li>\r\n	<li>&nbsp;Coach PARTNERS&#39; staff to fully comply with all aspects of financial and management policies as outlined in the project contracts and General terms &amp; conditions.</li>\r\n	<li>&nbsp;Assist in financial training of PARTNER staff, contributing to training materials and resources, organizing and facilitating PARTNERS&#39;s finance workshops and CBM partners project finance officers&#39; workshops and reflective meetings, and take responsibility for following up on participants&#39; action plans.</li>\r\n	<li>&nbsp;Liaising between project PARTNERS&#39;, country office and the donor.</li>\r\n	<li>&nbsp;Proactively manage working relationships with PARTNERS&#39;, project/programme Officers especially for a new organisation.</li>\r\n	<li>&nbsp;Contribute to the development of Terms of References for project monitoring visits,</li>\r\n</ul>\r\n\r\n<p>Provide support to PARTNERS POs as required, other projects finance officers.</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Uploading of approved financial documents in Navision and SharePoint as appropriate.</li>\r\n</ul>\r\n\r\n<p>To comply with all CBM HS&amp;S procedures and requirements at CBM and, at all times ensure own safety and health and that of other persons who may be affected by own acts or omissions at CBM.</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Providing support to project PARTNERs&#39; in procurement/local purchase related issues</li>\r\n	<li>&nbsp;Any other tasks assigned by the CO finance manager</li>\r\n</ul>\r\n\r\n<p><strong><strong>These are your qualifications</strong></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Degree in a Finance related field (such as Accounting, Business Management or Business Administration) with an academic background of at least BAC+4</li>\r\n	<li>&nbsp;A professional accounting qualification (such as ACA, CPA, ACCA, CNA) and Project Management knowledge is an asset.</li>\r\n	<li>&nbsp;Four years&#39; experience</li>\r\n	<li>&nbsp;Demonstrated experience in MS Office Packages</li>\r\n	<li>&nbsp;Demonstrated experience in use of accounting software an asset</li>\r\n	<li>&nbsp;Knowledge in MS Navision and MS SharePoint solutions an advantage</li>\r\n</ul>\r\n\r\n<p><strong>Highly numerate with proven analytical skills</strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Effective communication skills (verbal and written) with ability to translate financial information to non-financial audience.</li>\r\n	<li>&nbsp;Demonstrated ability in financial statements analysis with attention to detail and accuracy.</li>\r\n	<li>&nbsp;Ability to work in a fast-paced, team-oriented environment while juggling and coordinating multiple/conflicting priorities and deadlines.</li>\r\n	<li>&nbsp;Ability to integrate into a multi-cultural environment.</li>\r\n	<li>&nbsp;Must be proactive, seeking to do things differently, and to solve problems effectively and efficiently.</li>\r\n	<li>&nbsp;Ability and willingness to learn.</li>\r\n	<li>&nbsp;Able to work independently, and as a member of a team.</li>\r\n	<li>&nbsp;Reflects CBM values in daily work.</li>\r\n	<li>&nbsp;Identification with the Christian values and mandate of CBM.</li>\r\n</ul>\r\n\r\n<p><strong><strong>What we offer</strong></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;A meaningful position with a lot of creative freedom in the world&#39;s leading organisation in the field of Disability Inclusive Development</li>\r\n	<li>&nbsp;A fair salary and other social benefits based on the local conditions in the country you apply for</li>\r\n	<li>&nbsp;An approachable, agile organisation with self-reliant people in a diverse and collegial team and great team spirit.</li>\r\n</ul>\r\n\r\n<p><strong><strong>How to apply</strong></strong></p>\r\n\r\n<p>Please apply exclusively online via our applicant portal (see APPLY NOW).</p>\r\n\r\n<p>A letter of motivation, CV and relevant (work) references complete your application.</p>\r\n\r\n<p>We look forward to receiving your application no later than June 14th, 2024.</p>\r\n\r\n<p>We would like to further promote diversity in our teams and therefore welcome applications from people of different ethnic and social backgrounds, religions and world views, different ages and genders, and especially from people with disabilities.</p>\r\n\r\n<p>*Suitability is decisive, gender is irrelevant!</p>\r\n', 'CBM Christoffel-Blindenmission Christian Blind Mission', 0, NULL, 'Full time', 'Senior Level', 'Masters Degree', '3 Years', 'Ghana', '2024-09-08', 1, '2024-06-14 12:24:06'),
(4, 2, 'Monitoring & Evaluation, Information Management Officer', 'monitoring-evaluation-information-management-officer', 'The Monitoring and Evaluation (M&E) Information Management Officer is responsible for supporting data collection and the implementation/use of quality checklists (WASH, Food Security and Livelihoods, Education, Shelter, Information Counselling and Legal Assistance, Camp management) at the activity level. The position also serves as a supervisor for enumerators when needed. The incumbent will provide support in analyzing raw data from assessments, quality checklists, reporting, and providing direct support to the Monitoring and Evaluation Team Lead based in Maiduguri. He will support the technical M&E officer and the Program Managers in improving programming and the Area Office South.', '<p>Yola, Nigeria</p>\r\n\r\n<p>Be the First to Apply</p>\r\n\r\n<p><strong><strong>Job Description</strong></strong></p>\r\n\r\n<p>The Monitoring and Evaluation (M&amp;E) Information Management Officer is responsible for supporting data collection and the implementation/use of quality checklists (WASH, Food Security and Livelihoods, Education, Shelter, Information Counselling and Legal Assistance, Camp management) at the activity level. The position also serves as a supervisor for enumerators when needed. The incumbent will provide support in analyzing raw data from assessments, quality checklists, reporting, and providing direct support to the Monitoring and Evaluation Team Lead based in Maiduguri. He will support the technical M&amp;E officer and the Program Managers in improving programming and the Area Office South.</p>\r\n\r\n<p><strong><strong>Responsibilities</strong></strong></p>\r\n\r\n<p><strong><strong>Role and responsibilities</strong></strong></p>\r\n\r\n<p>Generic responsibilities</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Ensure compliance with NRC policies, guidelines and standards.</li>\r\n	<li>&nbsp;Responsible for implementation of operational M&amp;Eactivities in close collaboration with Core Competency technical officers and officers/assistants.</li>\r\n	<li>&nbsp;Ensure project documentation of M&amp;E activities of Core Competencies.</li>\r\n	<li>&nbsp;Contribute to the implementation of M&amp;E systems, including M&amp;E tools.</li>\r\n	<li>&nbsp;Ensure that NRC&#39;s related activities are implemented within NRC&#39;s SIP (Safe and Inclusive Programming) Guideline andreport any breaches/concerns to the line manager and/or focal point for proper action.</li>\r\n</ul>\r\n\r\n<p>Specific responsibilities</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Support in developing data collection methodology and tools, and in actual data collection as needed;</li>\r\n	<li>&nbsp;Support the digitalization of data collection tool and electronic warehousing of data</li>\r\n	<li>&nbsp;Support data management in close collaboration with core competencies&#39; data assistants and the development of clear information flows between program and M&amp;E staff, as needed.</li>\r\n	<li>&nbsp;Ensure that monitoring data are reportedin a timely manner to the technical M&amp;E Coordinator for quality checks and submission to the Program Managers and relevant program staff;</li>\r\n	<li>&nbsp;Support the targeting and the registration of beneficiaries as needed;</li>\r\n	<li>&nbsp;Supervise distributions in collaboration with programme staff.</li>\r\n	<li>&nbsp;Support post distribution monitoring and related activities.</li>\r\n</ul>\r\n\r\n<p><strong><strong>Qualifications</strong></strong></p>\r\n\r\n<p><strong><strong>Competencies</strong></strong></p>\r\n\r\n<p>Professional competencies</p>\r\n\r\n<p>These are skills, knowledgeand experience that are important for effective performance. Generic professional competencies for this position:</p>\r\n\r\n<ul>\r\n	<li>&nbsp;At least 3 years experience in an international NGO preferably in an emergency or post-conflict setting;</li>\r\n	<li>&nbsp;Experience with and knowledge of principles and current approaches to monitoring and evaluation in relief and development programs, using both quantitative and qualitative methods;</li>\r\n	<li>&nbsp;Computer skills, including MS Office (Word,Excel).</li>\r\n</ul>\r\n\r\n<p>Context related skills, knowledge and experience:</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Good communication and interpersonal skills; eO0mtIS B2Ncor</li>\r\n	<li>&nbsp;English language proficiency (speaking, reading, writing);</li>\r\n	<li>&nbsp;Strong organisational and team working skills;</li>\r\n	<li>&nbsp;Good cultural awareness and sensitivity;</li>\r\n	<li>&nbsp;Approachable, trustworthy and confidential;</li>\r\n	<li>&nbsp;Analytical and computer skills,including MS Office (Word, Excel,Outlook, PowerPoint, Access);</li>\r\n	<li>&nbsp;Experience in using ArcGis,Stata, Nvivo, CAPI systems (Kobo/ODK/CSpro), data visualisation softwares (eg. Power BI) is a plus;</li>\r\n	<li>&nbsp;Knowledge of the NRC&#39;s operations is a plus.</li>\r\n</ul>\r\n\r\n<p>Behavioural competencies</p>\r\n\r\n<ul>\r\n	<li>&nbsp;Planning and delivering results.</li>\r\n	<li>&nbsp;Working with people</li>\r\n	<li>&nbsp;Analyzing</li>\r\n	<li>&nbsp;Communicating with impact and respect</li>\r\n</ul>\r\n\r\n<p><strong><strong>Job Info</strong></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Job Identification 15029</li>\r\n	<li>&nbsp;Job Category Monitoring and Evaluation</li>\r\n	<li>&nbsp;Posting Date 06/05/2024, 03:41 PM</li>\r\n	<li>&nbsp;Apply Before 06/20/2024, 12:00 PM</li>\r\n	<li>&nbsp;Degree Level Bachelor&#39;s Degree</li>\r\n	<li>&nbsp;Job Schedule Full time</li>\r\n	<li>&nbsp;Location:&nbsp;Yola</li>\r\n</ul>\r\n', 'AEFID', 0, '666c2a3c456f1.png', 'Full time', 'Senior Level', 'Masters Degree', '2 Years', 'Yola', '2024-08-20', 0, '2024-06-14 12:32:12'),
(5, 1, 'Monitoring and Evaluation Analyst', 'monitoring-and-evaluation-analyst', 'NRC is implementing projects in the North West and South West Regions since 2018. All NRC Core Competencies: Education, WASH, Shelter, ICLA, and Livelihood and Food Security, are now fully operational in the NW, SW, and extending to the West, and Littoral regions. In order to effectively implement all of its programs, there is a great need for MEL Support. The MEL Officer is needed to ensure the strict respect of MEL procedures and provide the necessary support needed by the teams in the execution of the ongoing projects.', '<p><strong><strong>Trending</strong></strong></p>\r\n\r\n<p>NRC is implementing projects in the North West and South West Regions since 2018. All NRC Core Competencies: Education, WASH, Shelter, ICLA, and Livelihood and Food Security, are now fully operational in the NW, SW, and extending to the West, and Littoral regions. In order to effectively implement all of its programs, there is a great need for MEL Support. The MEL Officer is needed to ensure the strict respect of MEL procedures and provide the necessary support needed by the teams in the execution of the ongoing projects.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong><strong>Job Identification</strong></strong>&nbsp;: 18664</p>\r\n\r\n<p><strong><strong>Locations</strong></strong>&nbsp;: Kaduna, Nigeria</p>\r\n\r\n<p><strong><strong>Posting Date</strong></strong>&nbsp;: 06/04/2024, 11:23 AM</p>\r\n\r\n<p><strong><strong>Apply Before</strong></strong>&nbsp;: 06/20/2024, 04:00 AM</p>\r\n\r\n<p><strong><strong>Job Schedule</strong></strong>&nbsp;: Full time</p>\r\n\r\n<p><strong><strong>Grade</strong></strong>&nbsp;: SB4</p>\r\n\r\n<p><strong><strong>Vacancy Type</strong></strong>&nbsp;: Service Contract Holders</p>\r\n\r\n<p><strong><strong>Rotational/Non Rotational</strong></strong>&nbsp;: Non-Rotational</p>\r\n\r\n<p><strong><strong>Contract Duration</strong></strong>&nbsp;: 1 Year with Possibility for extension</p>\r\n\r\n<p><strong><strong>Education and Work Experience</strong></strong>&nbsp;: Master&#39;s Degree - 3 year(s) experience</p>\r\n\r\n<p><strong><strong>Vacancy Timeline</strong></strong>&nbsp;: 2 Weeks</p>\r\n\r\n<p><strong><strong>Job Category</strong></strong>&nbsp;: Monitoring &amp; Evaluation</p>\r\n\r\n<p><strong><strong>Job Description</strong></strong></p>\r\n\r\n<p><strong><strong>Background Information</strong></strong></p>\r\n\r\n<p>Post title: Monitoring and Evaluation Analyst</p>\r\n\r\n<p>Grade Level: SB4</p>\r\n\r\n<p>Position Number: 00097251</p>\r\n\r\n<p>Location: Kaduna, Nigeria</p>\r\n\r\n<p>Contract Type: Service Contract</p>\r\n\r\n<p>Duration: One year* (renewable based on availability of funds and satisfactory performance).</p>\r\n\r\n<p>Please note that this vacancy announcement is&nbsp;<strong><strong>only for Nigerian nationals</strong></strong>.</p>\r\n\r\n<p>*No expectancy of renewal in accordance with UN staff regulations 4.5.</p>\r\n\r\n<p><strong><strong>The Position:</strong></strong></p>\r\n\r\n<p>The Nigeria Country Programme is monitored through the Country Office in Abuja and the four sub-offices in Cross River, Kaduna, Lagos and Borno States. The sub-office based in Kaduna State is covering Kaduna, Sokoto, Bauchi, Zamfara and Gombe States supporting Population Change and Data, Quality Care and Services, and Gender and Social Norms. The sub-office also provides oversight functions on UNFPA interventions in other states of Northern Nigeria. The central office plays the coordination role and assumes an oversight function; it is also responsible for resource mobilization, strategic planning and monitoring and evaluation.</p>\r\n\r\n<p>The decentralised office is improving its focus on result based management and quality delivery of programme results. To strengthen this process and for UNFPA to keep its leadership role in the area of reproductive health and youth issues and data management and use even at the sub-national levels, the country office is looking for a Monitoring and Evaluation Analyst for its Kaduna decentralized office.</p>\r\n\r\n<p>The M&amp;E Analyst position will be based in the Kaduna DO and would report to the Programme Coordinator/Head of the DO with technical oversight by the National Program Officer, Monitoring and Evaluation based in the Country Office, Abuja</p>\r\n\r\n<p><strong><strong>How you can make a difference:</strong></strong></p>\r\n\r\n<p>UNFPA is the lead UN agency for delivering a world where every pregnancy is wanted, every childbirth is safe and every young person&#39;s potential is fulfilled. UNFPA&#39;s new strategic plan (2022-2025), focuses on three transformative results: to end preventable maternal deaths; end unmet need for family planning; and end gender-based violence and harmful practices.</p>\r\n\r\n<p>In a world where fundamental human rights are at risk, we need principled and ethical staff, who embody these international norms and standards, and who will defend them courageously and with full conviction.</p>\r\n\r\n<p>UNFPA is seeking candidates that transform, inspire and deliver high impact and sustained results; we need staff who are transparent, exceptional in how they manage the resources entrusted to them and who commit to deliver excellence in programme results.</p>\r\n\r\n<p><strong><strong>Job Purpose:</strong></strong></p>\r\n\r\n<p>The M&amp;E Analyst provides overall technical support for monitoring and evaluation and data management across the full range of the work of the DO.</p>\r\n\r\n<ul>\r\n	<li>&nbsp;S/he analyses, assesses relevant political, social and economic trends, and provides substantive inputs to project formulation, monitoring and evaluation, joint programming initiatives and State development frameworks.</li>\r\n	<li>&nbsp;The M&amp;E analyst guides and facilitates the delivery of UNFPA&#39;s programmes by monitoring results achieved during implementation.</li>\r\n	<li>&nbsp;S/he guides the development of methodologies as well as capacity development in monitoring and evaluation principles and practices to ensure relevance, efficiency, effectiveness, sustainability, and impact of the work of the UNFPA.</li>\r\n	<li>&nbsp;S/he works in close collaboration with the Country Office to ensure compliance with technical norms, rules and regulations.</li>\r\n	<li>&nbsp;S/he supports States to build capacity in data generation and use.</li>\r\n</ul>\r\n\r\n<p><strong><strong>You would be responsible for:</strong></strong></p>\r\n\r\n<p><strong><strong>Program monitoring, Data Collection and Analysis:</strong></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Assume the overall responsibility for overseeing the Sub-Office Monitoring and Evaluation</li>\r\n	<li>&nbsp;Expedite and coordinate project monitoring establishing collaborative relationships with executing agencies, experts, State government counterparts and other UN agencies facilitating timely and efficient monitoring of project inputs and addressing training needs of project personnel.</li>\r\n	<li>&nbsp;Monitor the development of Action Plans and the implementation of the recommendations of mission and field visits or missions to the SO.</li>\r\n	<li>&nbsp;Work with the state HMIS Officers in the states ministries of health to ensure routine NHMIS data are transmitted from the PHC through the LGAs to the national level.</li>\r\n	<li>&nbsp;Work closely with project teams, partners, and stakeholders to ensure M&amp;E activities are integrated into project planning, implementation, and reporting.</li>\r\n	<li>&nbsp;Establish collaborative relationships with implementing partners, experts, State government counterparts and other UN agencies facilitating timely and efficient monitoring of project inputs and fostering synergy, knowledge sharing and efficiency.</li>\r\n	<li>&nbsp;Contribute to the design and conduct of project evaluations to assess overall impact, effectiveness, efficiency, and sustainability.</li>\r\n	<li>&nbsp;Contribute to the development and implementation of robust CO M&amp;E frameworks, including logical frameworks, indicators, data collection tools, and reporting templates.</li>\r\n</ul>\r\n\r\n<p><strong><strong>Reporting:</strong></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Prepare quarterly and annual reports on the program implementation progress, achievements, challenges, and lessons learned, schedule and financial status and assist in the preparation of the Annual Work Plans (AWPs) for all the states covered by the SO. Share findings with relevant stakeholders, including donors, partners, and project staff.</li>\r\n	<li>&nbsp;Develop the Program mid and end of year report for the SO with a view to contributing to the Country Office wide midyear and annual reports</li>\r\n</ul>\r\n\r\n<p><strong><strong>Capacity Building:</strong></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Provide training and mentorship to project staff on M&amp;E concepts, tools, and techniques to strengthen their skills and knowledge.</li>\r\n	<li>&nbsp;In conjunction with other technical staff at the SO, provide support and guidance to the SO program planning, monitoring and evaluation activities including state level planning and reviews of AWP activities.</li>\r\n	<li>&nbsp;Provide technical and multi-sectoral support to the SO and support all M&amp;E and data related issues in the program of the Office as the need arises</li>\r\n	<li>&nbsp;Support the State HMIS officers and the LGA M&amp;E Officers to coordinate the periodic LGA M&amp;E meetings to strengthen the data management and use processes at these levels.</li>\r\n	<li>&nbsp;Maintain up-to-date the CO knowledge of M&amp;E best practices, tools, and technologies.</li>\r\n</ul>\r\n\r\n<p><strong><strong>Knowledge Management:</strong></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Contribute to capturing and documenting knowledge about current and emerging population development trends, RH and gender issues, by analyzing programme, projects, strategies, approaches and ongoing experience for lessons learned, best practices for knowledge sharing and planning future strategies.</li>\r\n	<li>&nbsp;Document lessons learned from program design and implementation at the SO with a view to contributing to relevant bulletins for the Country Office</li>\r\n	<li>&nbsp;Keep abreast of new policy developments and strategies analyzing policy papers, strategy documents, State plans and development frameworks, and prepare briefs and inputs for policy dialogue, technical assistance coordination, and development frameworks.</li>\r\n	<li>&nbsp;Share knowledge and lessons learned with colleagues and stakeholders.</li>\r\n</ul>\r\n\r\n<p><strong><strong>Program development &amp; Resource mobilization:</strong></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;In collaboration with State Government counterparts, NGOs and other partners, contribute substantively to the formulation and design of the country programme and its component projects in line with State Government priorities and according to UNFPA programme policies and procedures. eOu2kMb B2Ncor</li>\r\n	<li>&nbsp;Ensure quality of programme / project design incorporating lessons learned, newly developed policies and best practices and establishing appropriate execution and monitoring mechanisms and systems.</li>\r\n	<li>&nbsp;Assists advocacy and resource mobilization efforts of Country Office by preparing relevant documentation, i.e. project summaries, conference papers, speeches, donor profiles, and participating in donor meetings and public information events.</li>\r\n	<li>&nbsp;Analyze and interpret the political, social and economic environment relevant to population and development, reproductive health and gender, and identify opportunities for UNFPA assistance and intervention.</li>\r\n</ul>\r\n\r\n<p><strong><strong>Qualifications and Experience</strong></strong></p>\r\n\r\n<p><strong><strong>Education:</strong></strong></p>\r\n\r\n<p>Master&#39;s degree in public health, population, demography and/or other related social science field, with specific training in principles and practice of monitoring and evaluation including in humanitarian settings.</p>\r\n\r\n<p><strong><strong>Knowledge and Experience:</strong></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Three to five years&#39; professional work experience and expertise in monitoring and evaluation of Population and Reproductive Health.</li>\r\n	<li>&nbsp;Experience in data collection, management information system and data base management.</li>\r\n	<li>&nbsp;Experience working with Government, International NGOs and the Civil Society in the area of monitoring and evaluation of maternal health, family planning and gender.</li>\r\n	<li>&nbsp;Documented experience in analysis and analytical methodology in relation to complex data set.</li>\r\n	<li>&nbsp;Comprehensive knowledge and experience in both qualitative and quantitative methodologies</li>\r\n	<li>&nbsp;Knowledge of UN rules and regulations is an advantage;</li>\r\n	<li>&nbsp;Excellent organizational skills coupled with an ability to reach consensus</li>\r\n	<li>&nbsp;Knowledge of data analysis software - SPSS/Stata/GIS, etc.</li>\r\n	<li>&nbsp;Knowledge of the GRID 3 Project</li>\r\n</ul>\r\n\r\n<p><strong><strong>Languages:</strong></strong></p>\r\n\r\n<p>Fluency in English required. Strong capability to communicate clearly and concisely in both oral and written English will be an asset.</p>\r\n\r\n<p><strong><strong>Required Competencies</strong></strong></p>\r\n\r\n<p><strong><strong>Values:</strong></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Exemplifying integrity,</li>\r\n	<li>&nbsp;Demonstrating commitment to UNFPA and the UN system,</li>\r\n	<li>&nbsp;Embracing cultural diversity,</li>\r\n	<li>&nbsp;Embracing change</li>\r\n</ul>\r\n\r\n<p><strong><strong>Functional Competencies:</strong></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Advocacy/advancing a policy-oriented agenda</li>\r\n	<li>&nbsp;Delivering results based programmes</li>\r\n	<li>&nbsp;Leveraging the resources of national governments and partners/building strategic alliances and partnerships</li>\r\n	<li>&nbsp;Innovation and marketing of new approaches</li>\r\n	<li>&nbsp;Facilitating quality programme results</li>\r\n	<li>&nbsp;Technical knowledge on SRHR</li>\r\n	<li>&nbsp;Communicating for impact</li>\r\n</ul>\r\n\r\n<p><strong><strong>Core Competencies:</strong></strong></p>\r\n\r\n<ul>\r\n	<li>&nbsp;Achieving results,</li>\r\n	<li>&nbsp;Being accountable,</li>\r\n	<li>&nbsp;Developing and applying professional expertise/business acumen,</li>\r\n	<li>&nbsp;Thinking analytically and strategically,</li>\r\n	<li>&nbsp;Working in teams/managing ourselves and our relationships</li>\r\n</ul>\r\n\r\n<p><strong><strong>Compensation and Benefits</strong></strong></p>\r\n\r\n<p>This position offers an attractive remuneration package including a competitive net salary inclusive of rent, health insurance and other benefits as applicable.</p>\r\n\r\n<p><strong><strong>Disclaimer</strong></strong></p>\r\n\r\n<p>UNFPA does not charge any application, processing, training, interviewing, testing or other fee in connection with the application or recruitment process. Fraudulent notices, letters or offers may be submitted to the UNFPA fraud hotline http://www.unfpa.org/help/hotline.cfm</p>\r\n\r\n<p>In accordance with the Staff Regulations and Rules of the United Nations, persons applying to posts in the international Professional category, who hold permanent resident status in a country other than their country of nationality, may be required to renounce such status upon their appointment.</p>\r\n', 'NRC', 0, '666c3bab4dcff.png', 'Full time', 'Senior Level', 'Masters Degree', '5+ Years', '', '2024-08-29', 0, '2024-06-14 13:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `job_users`
--

CREATE TABLE `job_users` (
  `id` int(11) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `area_of_expertise` varchar(255) DEFAULT NULL,
  `industry` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL,
  `access` tinyint(4) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_users`
--

INSERT INTO `job_users` (`id`, `token`, `fullname`, `email`, `area_of_expertise`, `industry`, `password`, `role`, `access`, `date`) VALUES
(1, 'hUudsaoB2mG9jwjp4odDittZCnkevKB8', 'Victor Osaronwafor', 'victor@aefgroup.org', 'Web Development', NULL, '$2y$10$XJyBz7ojmME6itIRE52vzO4PIZnNcX325WbOjmLC1c0ycPh6uN26W', 'consultant', 0, '2024-04-17 15:21:20'),
(2, 'lv3wz00r53557', 'Endurance Okechukwu', 'endurance@aefgroup.org', NULL, NULL, '$2y$10$KrXjtufz3QJ/mB.kZ2w0x.eEpOSucvY5rf7ZGNt1rSFwzg34wKTK.', 'jobSeeker', 0, '2024-04-17 15:34:37'),
(3, 'WjBnCH7n0t7UbXSsQlxelIGjVJonZuwP', 'John Doe', 'johndoe@aefgroup.org', 'Tech', NULL, '$2y$10$/wDs1dBbEC/Tth9.NsbV5.oNV2RVRw867Iu0H.oK5UHxGvLnqTHHm', 'consultant', 0, '2024-04-17 15:41:33'),
(4, 'UaeWMjjhTwlId2jLN7xHfrXICVa3NixB', 'Gravis Designs', 'gravicsdesigns1@gmail.com', NULL, 'Tech', '$2y$10$IUv668QzzAbkCDzd7X0nbOEqZWz3.y.r3svuC5NGN6Ici3w4l1nWW', 'employer', 0, '2024-04-17 15:43:21'),
(5, 'vNVxXtTTFpIssebd0jAn4pwGjob9Cuet', 'Mathew Rosemary', 'rosemary@gmail.com', NULL, NULL, '$2y$10$Kp9RnJuSQJ0.jv9lHqxxx.1QFGFBGUQBUyStcORTxzgisHTV1/O0y', 'jobSeeker', 0, '2024-04-17 15:45:15'),
(6, 'jwCqj5HoLf8UsrBYFqzIV2ky3Lbsmv9s', 'victor', 'nwaforv69@gmail.com', NULL, NULL, '$2y$10$32bf8eKp8Lnr8MoJAwcP/eVFugXCbD4sjWVi6Xrr8Spk0IZKt5SSe', 'jobSeeker', 0, '2024-04-19 16:07:39'),
(7, 'I7N8BcH0lZfjATo5mbVBocLXFF6pKugE', 'endurance okey', 'endy@gmail.com', NULL, NULL, '$2y$10$YMBL6CKEX5cp5ZJn/rc31OU0LFA0r8xmCWNf.bl2/4tPQSrsPSXgq', 'jobSeeker', 0, '2024-07-08 17:28:45'),
(8, '49p8DdMo1JmJz2U2bD3kZhYMlMcyhzwF', 'John Doe', 'doe@gmail.com', NULL, NULL, '$2y$10$yp5Zl3NL2XqHQ7w0ReAJOO5bZjfx6W.vwWMgl0rBA4BhR0U4LiI/W', 'jobSeeker', 0, '2024-07-08 18:50:55'),
(9, '6zHMLNkCViw1tk6LkKJwBsvqzbSB3ZRc', 'John Doe Pope', 'johndoe@gmail.com', NULL, NULL, '$2y$10$SCZVLbAIh9ZxrzmMltLtG.xWdQ4DUS.03IZoa0BbTwUeNdnZn81G6', 'jobSeeker', 0, '2024-07-08 19:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `sectors`
--

CREATE TABLE `sectors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sectors`
--

INSERT INTO `sectors` (`id`, `name`, `description`, `status`, `date`) VALUES
(1, 'Global Health Sector', 'Global Health Sector', 0, '2024-03-17 15:03:22'),
(2, 'Food & Agriculture Sector', 'Food & Agriculture Sector Description', 0, '2024-03-17 15:14:33');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `wallet_address` text DEFAULT NULL,
  `about` longtext DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `office_address` longtext DEFAULT NULL,
  `withdrawal_error` text DEFAULT NULL,
  `payment_notice` text DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedIn` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `wallet_address`, `about`, `phone`, `email`, `office_address`, `withdrawal_error`, `payment_notice`, `facebook`, `instagram`, `twitter`, `linkedIn`, `youtube`, `logo`, `status`, `date`) VALUES
(1, 'bc1qxy2kgdygjrsqtzq2n0yrf2493p83kkfjhx0wlh', 'An experience anchored in stability, trust, and the boundless potential of digital investments. Join us on this journey and redefine your financial future with confidence.', '08188045678', 'support@coinhabor.com', '795 South Park Avenue,\r\nMelbourne, Australia', 'Unable to withdraw! Please contact support@coinhabor.com for assistance - Dynamics 365', 'Copy this wallet address to make payment, after making payment, upload the proof of payment on the \"proof section\".\r\nAfter confirmation, your current investment will be reflected. - Dynamics 366', 'facebook.com', 'instagram.com', 'twitter.com', 'linkedIn.com', 'youtube.com', '1708878843.png', 0, '2024-02-23 18:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `access` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 - unrestricted, 1 - restricted\r\n',
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `role`, `access`, `date_created`) VALUES
(2, 'Dev Jobs Africa', 'victorosaronwafor@gmail.com', '$2y$10$IQqxnhU3aX0WQyKBGV5jOu6PXgIDUMZNU7jFR7ckpcsQ5bH5NyO9C', 2, 0, '2023-08-25 17:25:00'),
(23, 'Victor Osaronwafor', 'victorosaronwafor@aefgroup.org', '$2y$10$0odZQmNZHy35tbD2M9z9sOiext0GMslrJt7jm48SqpIThL.pNXQeW', 0, 0, '2024-02-14 13:33:55'),
(25, 'Victor Olamide', 'osaronwaforvictor9@gmail.com', '$2y$10$t9UCngF5PE964mQJdD9Xo.gqXUrcEE./OA.wtQLRcudyNujm7SB1u', 1, 1, '2024-02-21 18:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(1000) NOT NULL,
  `page_url` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_users`
--
ALTER TABLE `job_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sectors`
--
ALTER TABLE `sectors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_users`
--
ALTER TABLE `job_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sectors`
--
ALTER TABLE `sectors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
