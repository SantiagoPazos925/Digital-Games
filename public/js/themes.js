if(window.localStorage.getItem('theme') !== ''){
  if(window.localStorage.getItem('theme') === "light")
  {
    document.getElementById('theme_css').href = 'proyecto/Proyecto/TpFinal/css/light.css';
    document.getElementById('theme2_css').href='proyecto/Proyecto/TpFinal/css/formStyles1.css'
    document.getElementById('dark').onclick = function () {
      document.getElementById('theme_css').href = 'proyecto/Proyecto/TpFinal/css/dark.css';
      document.getElementById('theme2_css').href='proyecto/Proyecto/TpFinal/css/formStyles.css'
      window.localStorage.setItem('theme', 'dark');
    }
    document.getElementById('light').onclick = function () {
        document.getElementById('theme_css').href = 'proyecto/Proyecto/TpFinal/css/light.css';
        document.getElementById('theme2_css').href='proyecto/Proyecto/TpFinal/css/formStyles1.css'
        window.localStorage.setItem('theme', 'light');
    }
  }
  else{
    document.getElementById('theme_css').href = 'proyecto/Proyecto/TpFinal/css/dark.css';
    document.getElementById('theme2_css').href='proyecto/Proyecto/TpFinal/css/formStyles.css'
    document.getElementById('dark').onclick = function () {
      document.getElementById('theme_css').href = 'proyecto/Proyecto/TpFinal/css/dark.css';
      document.getElementById('theme2_css').href='proyecto/Proyecto/TpFinal/css/formStyles.css'
      window.localStorage.setItem('theme', 'dark');
    }
    document.getElementById('light').onclick = function () {
        document.getElementById('theme_css').href = 'proyecto/Proyecto/TpFinal/css/light.css';
        document.getElementById('theme2_css').href='proyecto/Proyecto/TpFinal/css/formStyles1.css'
        window.localStorage.setItem('theme', 'light');
    }
  }
}
