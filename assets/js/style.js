
var dataReload = document.querySelectorAll("[data-reload]")

// Language Translate
var language = {
	idn : {
		about 			: "Tentang",
		gallery 		: "Album",
		photo 			: "Foto",
		video 			: "Vidio",
		contact 		: "Kontak",
		registration	: "Registrasi",
	},
	en : {
		about 			: "About",
		gallery 		: "Gallery",
		photo 			: "Photo",
		video 			: "Video",
		contact 		: "Contact",
		registration	: "Registration"
	}
};

// Define language via window hash

if (window.location.hash) {
	if (window.location.hash === "#idn") {
		hi.textContent  = language.idn.about;
		gal.textContent = language.idn.gallery;
		pho.textContent = language.idn.photo;
		vid.textContent = language.idn.video;
		con.textContent = language.idn.contact;
		res.textContent = language.idn.registration;
	}
}

// define language reload onclick illeration
for (i = 0; i <= dataReload.length; i++){
	dataReload[i].onclick = function() {
		location.reload(true);
	}
}