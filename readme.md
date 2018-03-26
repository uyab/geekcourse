# GEEKCOURSE
Prototype kursus online berbasis video mirip udemy.

# Rancangan Fitur

## Auth
* login 
* logout

## Member
* Edit profil
	* Name
	* Headline
	* Bio (WYSIWYG)
	* Language
* Edit photo
* Edit password

## Homepage
* Pengunjung bisa melihat:
	* Popular courses based on some algorithm
	* Jika sudah login, bisa melihat recommended courses based on some algorithm

## Courses
* Pengunjung bisa melihat semua course
	* Bisa filter by category
	* Bisa mencari by keyword
	* Bisa mengurutkan berdasar:
		* Most reviewed
		* Highest rated
		* Newest
		* Lowest price
		* Highest price
	* Paginasi
* Pengunjung bisa melihat informasi detil suatu course
	* Title
	* Subtitle
	* Description
	* Category
	* Image
	* Requirements
	* Targets Audience
	* Advantages
	* Price
	* Curriculum
		* Section -> Videos
    * Halaman khusus berisi daftar review
    * Halaman khusus berisi daftar students
* Pengunjung bisa melakuan aksi ADD TO CART
* Member bisa melakukan aksi BUY
* Member bisa melakukan aksi ADD TO WISHLIST
* Student bisa melihat konten course
* Student bisa memberikan rating terhadap course
* Student bisa memberikan komentar terhadap course
* Student bisa mem-follow suatu komentar
	* Mendapat email notifikasi jika ada response terhadap suatu komentar
* Author bisa melakukan manajemen course
	* CRUD
* Author bisa melakukan moderasi komentar

## Instructor
* Pengunjung bisa melihat halaman profile instructor
	* Nama, headline, bio
	* Jumlah students
	* Jumlah courses
	* Jumlah reviews
	* Daftar courses yang dibuat
