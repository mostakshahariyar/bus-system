// Array of image URLs
var imageUrls = [
   "https://i.ibb.co/tmSRnGB/Saintmartin-2020-208x78.png",
   "https://i.ibb.co/RTgwZFL/Chakladar-208x78.png",
    "https://i.ibb.co/Kqbs2Py/green-line-paribahan-208x78-1.png",
   "https://i.ibb.co/r4WJHXK/Purabi-Paribahan-208x78.png",
   "https://i.ibb.co/mt65cyb/Green-Express-208x78.png",
   "https://i.ibb.co/vP6XcjH/shah-ali-paribahan.jpg",
   "https://i.ibb.co/ZHwT0Qb/ena.jpg",
   "https://i.ibb.co/dkCbLVN/sr.png",
   "https://i.ibb.co/NYdqQDB/hanif.jpg",
   "https://i.ibb.co/m95jhBP/SR-travels-208x78.png",
   "https://i.ibb.co/C9NkWTb/Hanif-AC-208x78.png",
    "https://i.ibb.co/x5kpcrY/Ena-transport-prvt-Ltd-208x78.png",
   "https://i.ibb.co/cYkTR2t/nabil-paribahan-208x78.png",
    "https://i.ibb.co/Kqbs2Py/green-line-paribahan-208x78-1.png",
   "https://i.ibb.co/XZ5DFXz/Saintmartin-Hyunday-208x78.png",
    "https://i.ibb.co/PZLqTVG/Soudia-coach-services-208x78.png",
   "https://i.ibb.co/3cL9Z8v/Akota-transport-208x78.png",
   "https://i.ibb.co/WDBgwjB/tungipara-express-208x78.png",
   "https://i.ibb.co/BcbWWmj/MANIK-EXPRESS-208x78.png",
   "https://i.ibb.co/DGtjYVF/Al-Hamra-208x78.png",
   "https://i.ibb.co/znGG29N/Saint-martin-travels-208x78.png",
   "https://i.ibb.co/NYspcsM/Agomoni-express-208x78.png",
   "https://i.ibb.co/8rRGkfK/Orin-travels-208x78.png",
   "https://i.ibb.co/tKjJFMc/royal-Coach-208x78.png",
   "https://i.ibb.co/Fh0DKVt/Shohag-paribahan-208x78.png",
   "https://i.ibb.co/QYSKWY4/Emad-208x78.png",
   "https://i.ibb.co/rmQtKTn/SP-Golden-Line-208x78.png",
   "https://i.ibb.co/7JZBzXv/Star-Line-208x78.png",
   "https://i.ibb.co/Y74p6b8/Diganta-Paribahan-208x78.png",
   "https://i.ibb.co/zNxxC1V/SHAMIM-Enterprise-208x78.png",
   "https://i.ibb.co/Q9nTdsG/Barkat-Travels-208x78.png",
   "https://i.ibb.co/SmrD1W1/HAQUE-208x78.png",
   "https://i.ibb.co/VJNph2g/M-R-Enterprise-208x78.png",
   "https://i.ibb.co/rQnmFNx/Sagorika-208x78.png",
   "https://i.ibb.co/9TgyThB/Tuba-line-208x78.png",
   "https://i.ibb.co/k2vxmL9/Unity-208x78.png",
   "https://i.ibb.co/M58NCnP/Sheba-Green-Line-208x78.png",
   "https://i.ibb.co/wNJ6G6V/KANAK-208x78.png",
   "https://i.ibb.co/mrWjJkV/Tanzila-208x78.png",
   "https://i.ibb.co/mHmvW3Y/Khaja-Travels-208x78.png",
  ];
 
var imagesPerPage = 10;
var currentPage = 0;

function showImages(startIndex, endIndex) {
  var container = document.getElementById("imageContainer");
  container.innerHTML = "";

  for (var i = startIndex; i < endIndex; i++) {
    if (i >= imageUrls.length) {
      break;
    }

    var imageItem = document.createElement("div");
    imageItem.classList.add("imageItem");

    var img = document.createElement("img");
    img.src = imageUrls[i];
    imageItem.appendChild(img);

    container.appendChild(imageItem);
  }
}

function showPage(pageNumber) {
  var startIndex = pageNumber * imagesPerPage;
  var endIndex = startIndex + imagesPerPage;
  showImages(startIndex, endIndex);
}

function goToPrevPage() {
  if (currentPage > 0) {
    currentPage--;
    showPage(currentPage);
  }
}

function goToNextPage() {
  var totalPages = Math.ceil(imageUrls.length / imagesPerPage);
  if (currentPage < totalPages - 1) {
    currentPage++;
    showPage(currentPage);
  }
}

// Initial display
showPage(currentPage);

// Event listeners for pagination buttons
document.getElementById("prevBtn").addEventListener("click", goToPrevPage);
document.getElementById("nextBtn").addEventListener("click", goToNextPage);