-- convert Laravel migrations to raw SQL scripts --

-- migration:2014_10_12_000000_create_users_table --
create table `users` (
  `id` bigint unsigned not null auto_increment primary key, 
  `name` varchar(255) not null, 
  `email` varchar(255) not null, 
  `email_verified_at` timestamp null, 
  `password` varchar(255) not null, 
  `remember_token` varchar(100) null, 
  `created_at` timestamp null, 
  `updated_at` timestamp null
) default character set utf8 collate 'utf8_unicode_ci';
alter table 
  `users` 
add 
  unique `users_email_unique`(`email`);

-- migration:2014_10_12_100000_create_password_resets_table --
create table `password_resets` (
  `email` varchar(255) not null, 
  `token` varchar(255) not null, 
  `created_at` timestamp null
) default character set utf8 collate 'utf8_unicode_ci';
alter table 
  `password_resets` 
add 
  index `password_resets_email_index`(`email`);

-- migration:2019_08_19_000000_create_failed_jobs_table --
create table `failed_jobs` (
  `id` bigint unsigned not null auto_increment primary key, 
  `connection` text not null, `queue` text not null, 
  `payload` longtext not null, `exception` longtext not null, 
  `failed_at` timestamp default CURRENT_TIMESTAMP not null
) default character set utf8 collate 'utf8_unicode_ci';

-- migration:2019_10_09_071738_create_films_table --
create table `films` (
  `id` bigint unsigned not null auto_increment primary key, 
  `titre` varchar(100) not null, 
  `auteur` varchar(100) not null, 
  `genre` varchar(255) not null, 
  `duree` varchar(255) not null, 
  `annee` year not null, 
  `img` varchar(255) not null, 
  `synopsys` text not null, 
  `created_at` timestamp null, 
  `updated_at` timestamp null
) default character set utf8 collate 'utf8_unicode_ci';

-- migration:2019_10_09_094356_create_immatriculations_table --
create table `immatriculations` (
  `id` bigint unsigned not null auto_increment primary key, 
  `numero` int not null, `created_at` timestamp null, 
  `updated_at` timestamp null
) default character set utf8 collate 'utf8_unicode_ci';

-- migration:2019_10_09_094954_add_films_immatriculations --
alter table 
  `immatriculations` 
add 
  `films_id` bigint unsigned null;
alter table 
  `immatriculations` 
add 
  constraint `immatriculations_films_id_foreign` foreign key (`films_id`) references `films` (`id`);

-- migration:2019_10_10_122108_add_user_username --
alter table 
  `users` 
add 
  `username` varchar(255) not null;

-- migration:2019_10_10_132632_add_user_token --
alter table 
  `users` 
add 
  `api_token` varchar(80) null 
after 
  `password`;
alter table 
  `users` 
add 
  unique `users_api_token_unique`(`api_token`);
