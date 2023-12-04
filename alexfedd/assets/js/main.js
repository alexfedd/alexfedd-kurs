AOS.init({
    once: true,
    disable: 'phone'
});
const navigation = document.querySelector('.navigation');
const navBtn = document.querySelector('.nav-btn');
let closeNav;
navBtn.addEventListener('click', event => {
    navigation.classList.toggle('open');
    closeNav = document.querySelector('.close-btn');
})

document.addEventListener('click', event => {
    if (navigation.classList.contains('open')) {
        if (((event.target != navigation && !navigation.contains(event.target)) || event.target == closeNav.querySelector('img')) && event.target != navBtn.querySelector('img') )
        {
            navigation.classList.toggle('open');
        }
    }
});

const langRU = document.querySelector('.ru-btn');
const langEN = document.querySelector('.en-btn');

const curLang = Object.fromEntries(document.cookie.split('; ').map(cookie => cookie.split('=')))['pll_language'];
if(curLang === 'ru')
{
    langRU.classList.add('active');
}
else {
    langEN.classList.add('active');
}

langEN.addEventListener('click', event => {
    if (!langEN.classList.contains('active'))
    {
        langRU.classList.remove('active');
        langEN.classList.add('active');
    }
});

langRU.addEventListener('click', event => {
    if (!langRU.classList.contains('active'))
    {
        langEN.classList.remove('active');
        langRU.classList.add('active');
    }
});

const imgLoader = document.querySelectorAll('.img-loader');

imgLoader.forEach( imgLoad => {
	const imgLoaderContent = imgLoad.querySelector('img');
	if(imgLoaderContent.complete)
	{}
	else {
		imgLoaderContent.style.opacity = '0';
		imgLoaderContent.onload = () => {
		imgLoaderContent.style.opacity = '';
		}
	}
})

const form = document.querySelector("form");
form.addEventListener("submit", async (event) => {
    event.preventDefault();
    const formData = new FormData(form);
    // Проход по каждому полю формы и добавление его значения и имени в объект formValues
    fetch("http://" + document.location.hostname + "/wp-content/themes/alexfedd/send.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => {
        if (response.ok) {
          return response.json(); // Если сервер возвращает JSON, можно распарсить его
        } else {
          throw new Error("Ошибка HTTP: " + response.status);
        }
      })
      .then((data) => {
        console.log("Success");
        form.style.display = 'none';
        const alert = document.querySelector('.afterform-mes');
        alert.style.display = 'block';
      })
  });