document.addEventListener("DOMContentLoaded", () => {
  const categories = document.querySelectorAll(".category");
  const images = document.querySelectorAll("#imageCategories img");
  let currentActiveImage = images[0];

  // Отображение изображения для выбранной категории
  const showImage = (categoryId) => {
      if (currentActiveImage) {
          currentActiveImage.style.display = "none";
      }
      const image = document.getElementById(`category-${categoryId}-image`);
      if (image) {
          image.style.display = "block";
          currentActiveImage = image;
      }
  };

  // Обработчик наведения на категории
  categories.forEach((category) => {
      category.addEventListener("mouseenter", () => {
          // Убираем активный класс у всех категорий
          categories.forEach((cat) => {
              cat.classList.remove("category_header_active");
              cat.querySelector("svg").style.stroke = "black";
          });

          // Устанавливаем активный класс для текущей категории
          category.classList.add("category_header_active");
          category.querySelector("svg").style.stroke = "#e65b1d";

          // Скрываем все подкатегории
          document.querySelectorAll(".subcategory_list").forEach((subcat) => {
              subcat.style.display = "none";
          });

          // Отображаем подкатегории текущей категории
          const subcategoryId = category.dataset.target;
          const subcategory = document.getElementById(subcategoryId);
          if (subcategory) {
              subcategory.style.display = "block";
          }

          // Отображаем изображение для текущей категории
          const categoryId = category.id.split("-")[1]; // Извлекаем ID категории
          showImage(categoryId);
      });
  });

  // Установка первой категории по умолчанию
  const firstCategory = categories[0];
  if (firstCategory) {
      firstCategory.classList.add("category_header_active");
      firstCategory.querySelector("svg").style.stroke = "#e65b1d";

      const firstSubcategory = document.getElementById(firstCategory.dataset.target);
      if (firstSubcategory) {
          firstSubcategory.style.display = "block";
      }

      const firstCategoryId = firstCategory.id.split("-")[1];
      showImage(firstCategoryId);
  }


  // Логика модального окна
  const modal = document.getElementById("modalCategory");
  const btn = document.getElementById("btnOpenCategory");
  const span = document.querySelector(".close_modal_category");
  const body = document.body;
  const modalContent = document.querySelector(".modal_category_mobile");

  const toggleModal = () => {
      modalContent.classList.toggle("open");
      body.style.overflowY = body.style.overflowY === "hidden" ? "auto" : "hidden";
  };

  btn.addEventListener("click", () => {
      if (window.matchMedia("(min-width: 750px)").matches) {
          modal.style.display = "block";
          body.style.overflow = "hidden";
          body.style.marginRight = "16.340px";
      } else {
          toggleModal();
      }
  });

  span.addEventListener("click", () => {
      modal.style.display = "none";
      body.style.overflow = "auto";
      body.style.marginRight = "0";
  });

  window.addEventListener("click", (event) => {
      if (event.target === modal) {
          modal.style.display = "none";
          body.style.overflow = "auto";
          body.style.marginRight = "0";
      }
  });

  // Аккордеон для мобильного меню
  const accordions = document.querySelectorAll(".modal_category_mobile_accordion");
  accordions.forEach((accordion) => {
      accordion.addEventListener("click", () => {
          accordion.classList.toggle("modal_category_mobile_active");
          const panel = accordion.nextElementSibling;
          panel.style.maxHeight = panel.style.maxHeight ? null : `${panel.scrollHeight}px`;
      });
  });

  // Кнопка "вверх"
  const buttonUp = document.getElementById("button_up_js");
  let lastScrollTop = 0;

  window.addEventListener("scroll", () => {
      const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      const scrollHeight = document.body.scrollHeight;

      if (scrollTop >= scrollHeight * 0.2 && scrollTop > lastScrollTop) {
          buttonUp.classList.add("visible");
          buttonUp.classList.remove("hidden");
      } else if (scrollTop <= scrollHeight * 0.2 || scrollTop < lastScrollTop) {
          buttonUp.classList.remove("visible");
          buttonUp.classList.add("hidden");
      }

      lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
  });

  buttonUp.addEventListener("click", () => {
      if (buttonUp.classList.contains("visible")) {
          window.scrollTo({ top: 0, behavior: "smooth" });
          buttonUp.classList.remove("visible");
      }
  });
});
