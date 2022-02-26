const injectFieldNames = () => {
	// injecting stuff labels for email and password

	const emailInjection = `<div id="email-label">Email*</div>`;
	const passwordInjection = `<div id="password-label">Password*</div>`;

	// emailInjection
	if (
		document.querySelector(
			"#pragyan_loginform > fieldset > table > tbody > tr:nth-child(1) > td"
		)
	) {
		document.querySelector(
			"#pragyan_loginform > fieldset > table > tbody > tr:nth-child(1) > td"
		).innerHTML =
			emailInjection +
			document.querySelector(
				"#pragyan_loginform > fieldset > table > tbody > tr:nth-child(1) > td"
			).innerHTML;
	}
	if (
		document.querySelector(
			"#pragyan_loginform > fieldset > table > tbody > tr:nth-child(2) > td"
		)
	) {
		// password injection
		document.querySelector(
			"#pragyan_loginform > fieldset > table > tbody > tr:nth-child(2) > td"
		).innerHTML =
			passwordInjection +
			document.querySelector(
				"#pragyan_loginform > fieldset > table > tbody > tr:nth-child(2) > td"
			).innerHTML;
	}
};

const addQuestionMarkToTheEndOfForgotPassword = () => {
	if (
		document.querySelector(
			"#pragyan_loginform > fieldset > table > tbody > tr:nth-child(3) > td > a "
		)
	)
		document.querySelector(
			"#pragyan_loginform > fieldset > table > tbody > tr:nth-child(3) > td > a "
		).innerHTML += " ?";
};

const updateCaptchaText = () => {
	if (
		document.querySelector(
			"#injection > form > fieldset > table > tbody > tr:nth-child(6) > td:nth-child(1)"
		)
	)
		document.querySelector(
			"#injection > form > fieldset > table > tbody > tr:nth-child(6) > td:nth-child(1)"
		).innerHTML += " <br>We just wanna ensure you are not a robot";
};

const addClassNameForSomeChildren = () => {
	const rows = document.querySelectorAll(
		"#injection > form > fieldset > table > tbody > tr"
	);
	const end = rows.length - 1,
		length = 3;
	for (let i = end; i >= end - length; i--) {
		if (rows && rows[i]) {
			rows[i].classList.add("action-stuff");
		}
	}
};

const initProfileForm = () => {
	if (location.href.includes("profile")) {
		try {
			document.querySelector(
				"#injection > fieldset:nth-child(9)"
			).style.display = "none";
			document.querySelector(
				"#injection > fieldset:nth-child(10)"
			).style.display = "none";
			document.querySelector(
				"#cms-registrationform > fieldset > table > tbody > tr:nth-child(9)"
			).style.display = "none";

			injectProfilePage();
		} catch (err) {}
	}
};

const injectProfilePage = () => {
	document.querySelector("#cms-registrationform").innerHTML =
		"<div id='profile-heading'>Edit Profile</div>" +
		document.querySelector("#cms-registrationform").innerHTML;
};

window.onload = () => {
	injectFieldNames();
	addQuestionMarkToTheEndOfForgotPassword();
	// updateCaptchaText();
	addClassNameForSomeChildren();

	initProfileForm();
};
