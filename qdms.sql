-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2025 at 07:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qdms`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('boost.roster.scan', 'a:2:{s:6:\"roster\";O:21:\"Laravel\\Roster\\Roster\":3:{s:13:\"\0*\0approaches\";O:29:\"Illuminate\\Support\\Collection\":2:{s:8:\"\0*\0items\";a:0:{}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:11:\"\0*\0packages\";O:32:\"Laravel\\Roster\\PackageCollection\":2:{s:8:\"\0*\0items\";a:6:{i:0;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:5:\"^11.9\";s:10:\"\0*\0package\";E:37:\"Laravel\\Roster\\Enums\\Packages:LARAVEL\";s:14:\"\0*\0packageName\";s:17:\"laravel/framework\";s:10:\"\0*\0version\";s:7:\"11.45.1\";s:6:\"\0*\0dev\";b:0;}i:1;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:6:\"v0.3.6\";s:10:\"\0*\0package\";E:37:\"Laravel\\Roster\\Enums\\Packages:PROMPTS\";s:14:\"\0*\0packageName\";s:15:\"laravel/prompts\";s:10:\"\0*\0version\";s:5:\"0.3.6\";s:6:\"\0*\0dev\";b:0;}i:2;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:0;s:13:\"\0*\0constraint\";s:6:\"v0.1.1\";s:10:\"\0*\0package\";E:33:\"Laravel\\Roster\\Enums\\Packages:MCP\";s:14:\"\0*\0packageName\";s:11:\"laravel/mcp\";s:10:\"\0*\0version\";s:5:\"0.1.1\";s:6:\"\0*\0dev\";b:1;}i:3;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:5:\"^1.13\";s:10:\"\0*\0package\";E:34:\"Laravel\\Roster\\Enums\\Packages:PINT\";s:14:\"\0*\0packageName\";s:12:\"laravel/pint\";s:10:\"\0*\0version\";s:6:\"1.24.0\";s:6:\"\0*\0dev\";b:1;}i:4;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:5:\"^1.26\";s:10:\"\0*\0package\";E:34:\"Laravel\\Roster\\Enums\\Packages:SAIL\";s:14:\"\0*\0packageName\";s:12:\"laravel/sail\";s:10:\"\0*\0version\";s:6:\"1.43.1\";s:6:\"\0*\0dev\";b:1;}i:5;O:22:\"Laravel\\Roster\\Package\":6:{s:9:\"\0*\0direct\";b:1;s:13:\"\0*\0constraint\";s:7:\"^11.0.1\";s:10:\"\0*\0package\";E:37:\"Laravel\\Roster\\Enums\\Packages:PHPUNIT\";s:14:\"\0*\0packageName\";s:15:\"phpunit/phpunit\";s:10:\"\0*\0version\";s:7:\"11.5.27\";s:6:\"\0*\0dev\";b:1;}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:21:\"\0*\0nodePackageManager\";E:43:\"Laravel\\Roster\\Enums\\NodePackageManager:NPM\";}s:9:\"timestamp\";i:1763100521;}', 1763186921);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_08_25_065007_file_upload', 2),
(5, '2025_11_14_061721_add_category_and_date_to_uploaded_files_table', 3),
(6, '2025_11_17_050038_create_quality_ambassadors_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quality_ambassadors`
--

CREATE TABLE `quality_ambassadors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `motto` text DEFAULT NULL,
  `adi_daser_score` decimal(5,2) DEFAULT NULL,
  `biography` text DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quality_ambassadors`
--

INSERT INTO `quality_ambassadors` (`id`, `name`, `profile_image`, `motto`, `adi_daser_score`, `biography`, `department`, `position`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Sarah Johnson', NULL, 'Quality is not an act, it is a habit.', 95.50, 'Dr. Sarah Johnson is a distinguished quality management expert with over 15 years of experience in manufacturing excellence. She holds a PhD in Quality Management and has led numerous successful quality improvement initiatives across multinational corporations. Her expertise in statistical process control and Six Sigma methodologies has consistently delivered measurable improvements in product quality and operational efficiency.', 'Quality Assurance', 'Senior Quality Director', 1, '2025-11-16 22:49:59', '2025-11-16 22:49:59'),
(2, 'Michael Chen', NULL, 'Continuous improvement is better than delayed perfection.', 88.20, 'Michael Chen is a passionate quality advocate with a strong background in automotive manufacturing. With over 12 years of experience in quality systems implementation, he specializes in ISO 9001 compliance and lean manufacturing principles. Michael has successfully led cross-functional teams to achieve zero-defect production targets and has been recognized with multiple quality excellence awards.', 'Production', 'Quality Manager', 1, '2025-11-16 22:49:59', '2025-11-16 22:49:59'),
(3, 'Emily Rodriguez', NULL, 'Excellence is never an accident; it is always the result of high intention.', 91.80, 'Emily Rodriguez brings a wealth of experience in process optimization and quality engineering. With a Master\'s degree in Industrial Engineering and certification in Quality Management, she has implemented innovative quality control systems that have reduced defect rates by over 40%. Emily is particularly skilled in root cause analysis and preventive action planning.', 'Process Engineering', 'Quality Engineer', 1, '2025-11-16 22:49:59', '2025-11-16 22:49:59'),
(4, 'David Thompson', NULL, 'The price of excellence is discipline; the cost of mediocrity is disappointment.', 85.70, 'David Thompson is a results-driven quality professional with extensive experience in warehouse and logistics operations. He has successfully implemented quality management systems across multiple distribution centers, improving inventory accuracy and order fulfillment rates. David\'s expertise in quality audits and compliance has made him a valuable asset to the organization.', 'Warehouse Operations', 'Warehouse Quality Coordinator', 1, '2025-11-16 22:49:59', '2025-11-16 22:49:59'),
(5, 'Lisa Anderson', NULL, 'Quality means doing it right when no one is looking.', 93.40, 'Lisa Anderson is a dedicated quality ambassador with a proven track record in laboratory quality management. With a background in chemical engineering and specialized training in Good Laboratory Practices (GLP), she has established robust quality systems that ensure product safety and regulatory compliance. Lisa is passionate about mentoring junior quality professionals.', 'Research & Development', 'Laboratory Quality Manager', 1, '2025-11-16 22:49:59', '2025-11-16 22:49:59'),
(6, 'Robert Kim', NULL, 'Success is the sum of small efforts repeated day in and day out.', 79.60, 'Robert Kim is a dynamic quality professional specializing in supplier quality management. With over 10 years of experience in supply chain quality assurance, he has developed and implemented comprehensive supplier qualification programs that have significantly improved incoming material quality. Robert\'s expertise in supplier audits and quality agreements has strengthened supplier relationships.', 'Procurement', 'Supplier Quality Engineer', 1, '2025-11-16 22:49:59', '2025-11-16 22:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DgOpeMtlN7uQBMB5nMNh9S2AXXuZqoModcz1Az08', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQkZzOXo4RjlHc0dXVFJhSHh2QXhlZ0RsWkN5VlNJT0dZRjV4YVE2QyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9maWxlcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1763440843),
('XPEU1bxFAWHp7G2MEqFaDqN4o7XdgBK3riuXJuuZ', NULL, '192.168.43.175', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSmR6V2dUYndoWXluOGxiOXNmZlZKSkNScDFqdVhrd0R0TEdwT3lsciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xOTIuMTY4LjQzLjE3NTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1763441593),
('ZcurjgaQrf40irReDFcjS3qTXoZpMrWnjVBSfq8E', NULL, '10.3.61.150', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY0hhZllVQ05yYzJRTXhxb29oT0FIbHFjVFdpMVhkZ2ZHMWU5QjBFciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xOTIuMTY4LjQzLjE3NTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1763441611);

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_files`
--

CREATE TABLE `uploaded_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `document_date` date DEFAULT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uploaded_files`
--

INSERT INTO `uploaded_files` (`id`, `file_name`, `file_type`, `category`, `document_date`, `file_path`, `created_at`, `updated_at`) VALUES
(6, '1756110127_BREAKNET MICKEY K IG7164.pdf', 'bsom', NULL, NULL, 'uploads/bsom/1756110127_BREAKNET MICKEY K IG7164.pdf', '2025-08-25 01:22:07', '2025-08-25 01:22:07'),
(7, '12345_RCA_Report_Q1.pdf', 'rca', '3rd Party', '2024-01-15', 'uploads/rca/test1.pdf', '2025-11-13 23:28:02', '2025-11-13 23:28:02'),
(8, '67890_Warehouse_Claim_Analysis.docx', 'rca', 'Warehouse Claims', '2023-12-20', 'uploads/rca/test2.docx', '2025-11-13 23:28:02', '2025-11-13 23:28:02'),
(9, '11111_Quality_Issue_RCA.xlsx', 'rca', '3rd Party', '2023-11-10', 'uploads/rca/test3.xlsx', '2025-11-13 23:28:02', '2025-11-13 23:28:02'),
(10, 'AQL_Policy_Document_v2.pdf', 'policy', 'AQL Policy', '2024-01-10', 'uploads/policy/aql_policy.pdf', '2025-11-16 17:34:07', '2025-11-16 17:34:07'),
(11, 'BPM_Mold_Policy_Guidelines.docx', 'policy', 'BPM Mold Policy', '2023-12-15', 'uploads/policy/bpm_mold_policy.docx', '2025-11-16 17:34:07', '2025-11-16 17:34:07'),
(12, 'Cut_to_Box_Policy_2024.pdf', 'policy', 'Cut to Box Policy', '2024-02-01', 'uploads/policy/cut_to_box_policy.pdf', '2025-11-16 17:34:07', '2025-11-16 17:34:07'),
(13, 'Defective_Return_Policy_Procedure.xlsx', 'policy', 'Defective Return Policy', '2023-11-20', 'uploads/policy/defective_return_policy.xlsx', '2025-11-16 17:34:07', '2025-11-16 17:34:07'),
(14, 'Development_Policy_Guidelines.pdf', 'policy', 'Development Policy', '2023-10-15', 'uploads/policy/development_policy.pdf', '2025-11-16 17:34:07', '2025-11-16 17:34:07'),
(15, 'LAB_Policy_Standards.docx', 'policy', 'LAB Policy', '2024-01-25', 'uploads/policy/lab_policy.docx', '2025-11-16 17:34:07', '2025-11-16 17:34:07'),
(16, 'Warehouse_Policy_Management.pdf', 'policy', 'Warehouse Policy', '2023-09-10', 'uploads/policy/warehouse_policy.pdf', '2025-11-16 17:34:07', '2025-11-16 17:34:07'),
(21, 'Printing_Embosing_Inspection_Standard.pdf', 'work_instruction', 'Printing and Embosing Inspection', '2024-01-05', 'uploads/work_instruction/printing_embosing.pdf', '2025-11-16 21:31:06', '2025-11-16 21:31:06'),
(22, 'Stockfit_Inspection_Procedure.docx', 'work_instruction', 'Stockfit Inspection', '2023-10-25', 'uploads/work_instruction/stockfit_inspection.docx', '2025-11-16 21:31:06', '2025-11-16 21:31:06'),
(23, 'Incoming_Material_Inspection_Checklist.pdf', 'work_instruction', 'Incoming Material Inspection', '2024-02-01', 'uploads/work_instruction/incoming_material_inspection.pdf', '2025-11-16 21:31:06', '2025-11-16 21:31:06'),
(24, 'AQL_Final_Inspection_Guidelines.pdf', 'work_instruction', 'AQL Inspection', '2023-09-15', 'uploads/work_instruction/aql_final_inspection.pdf', '2025-11-16 21:31:06', '2025-11-16 21:31:06'),
(31, '1763438106_Court 80\'s M FV8543.pdf', 'rca', 'Warehouse Claims', '2025-11-17', 'uploads/rca/1763438106_Court 80\'s M FV8543.pdf', '2025-11-17 20:55:06', '2025-11-17 20:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'admin@admin.com', NULL, '$2y$12$2P8ZpXWQ3UymU65UwXtImu20DKJjthE6RCxKpqR.DrLOaKkJZMmwe', NULL, '2025-08-15 00:19:36', '2025-08-15 00:19:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `quality_ambassadors`
--
ALTER TABLE `quality_ambassadors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quality_ambassadors`
--
ALTER TABLE `quality_ambassadors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
