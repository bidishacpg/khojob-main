const jobs = [
    {
      title: "Software Engineer",
      image: "imgg/fuse.png",
      details:
        "Responsible for designing, developing and maintaining software systems and applications.",
      Positions: "Fuse",
      link: "#",
    },
  
    {
      title: "It officer",
      image: "imgg/asterdio.png",
      details:
        "Responsible for collecting, analyzing and interpreting large data sets to help organizations make better decisions.",
      Positions: "Aesterdio",
      link: "#",
    },
  
    {
      title: "Project Manager",
      image: "imgg/AIT.jpeg",
      details:
        "Responsible for planning, executing and closing projects on time and within budget.",
      Positions: "AIT",
      link: "#",
    },
  
    {
      title: "Software Engineer",
      image: "imgg/grow.jpeg",
      details:
        "Responsible for managing the entire product life cycle, from ideation to launch and post-launch maintenance.",
      Positions: "Grow",
      link: "#",
    },
  
    {
      title: "Receptionist",
      image: "imgg/Miniso.jpg",
      details:
        "Responsible for reaching out to potential customers and closing sales deals.",
      Positions: "Miniso",
      link: "#",
    },
  
    {
      title: "assistant manager",
      image: "imgg/amazon.jpg",
      details:
        "Responsible for creating and executing marketing strategies to promote a company or product.",
      Positions: "amazon",
      link: "#",
    },
    {
      title: "Content manager",
      image: "imgg/youtube.png",
      details:
        "Responsible for creating and executing marketing strategies to promote a company or product.",
      Positions: "Youtube",
      link: "#",
    },
  ];
  
  const jobsHeading = document.querySelector(".jobs-list-container h2");
  const jobsContainer = document.querySelector(".jobs-list-container .jobs");
  const jobSearch = document.querySelector(".jobs-list-container .job-search");
  
  let searchTerm = "";
  
  if (jobs.length == 1) {
    jobsHeading.innerHTML = `${jobs.length} Job`;
  } else {
    jobsHeading.innerHTML = `${jobs.length} Jobs`;
  }
  
  const createJobListingCards = () => {
    jobsContainer.innerHTML = "";
  
    jobs.forEach((job) => {
      if (job.title.toLowerCase().includes(searchTerm.toLowerCase())) {
        let jobCard = document.createElement("div");
        jobCard.classList.add("job");
  
        let image = document.createElement("img");
        image.src = job.image;
  
        let title = document.createElement("h3");
        title.innerHTML = job.title;
        title.classList.add("job-title");
  
        let details = document.createElement("div");
        details.innerHTML = job.details;
        details.classList.add("details");
  
        let detailsBtn = document.createElement("a");
        detailsBtn.href = job.link;
        detailsBtn.innerHTML = "More Details";
        detailsBtn.classList.add("details-btn");
  
        let openPositions = document.createElement("span");
        openPositions.classList.add("positions");
  
        if (job.Positions == Fuse) {
          Positions.innerHTML = `${job.Positions} position`;
        } else {
          Positions.innerHTML = `${job.Positions}  positions`;
        }
  
        jobCard.appendChild(image);
        jobCard.appendChild(title);
        jobCard.appendChild(details);
        jobCard.appendChild(details-Btn);
        jobCard.appendChild(Positions);
  
        jobsContainer.appendChild(jobCard);
      }
    });
  };
  
  createJobListingCards();
  
  jobSearch.addEventListener("input", function (e) {
          searchTerm = e.target.value;

          createJobListingCards();
      });