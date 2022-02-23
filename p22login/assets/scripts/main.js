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
	console.log(rows);
	const start = 7,
		end = 9;
	for (let i = start; i <= end; i++) {
		console.log(rows[i]);
		if (rows && rows[i]) {
			rows[i].classList.add("action-stuff");
		}
	}
};

window.onload = () => {
	injectFieldNames();
	addQuestionMarkToTheEndOfForgotPassword();
	// updateCaptchaText();
	addClassNameForSomeChildren();
};
