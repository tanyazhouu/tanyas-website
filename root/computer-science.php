<?php
$header_type = "cs-title";
$navbar_type = "cs-navbar";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Tanya's Website</title>
  <link rel="stylesheet" type="text/css" href="public/styles/styles.css" media="all" />
</head>

<body class="computer-science">
  <?php include('includes/header.php'); ?>
  <main class="cs-text">
    <section>
      <div>
        <p class="cs-header green">//my skills in computer science:</p>
        <p class="cs-detail blue">languages/skills:</p>
        <p class="cs-detail">Java, C++, C, Python, OCaml, MATLAB, HTML, CSS, Javascript</p>
        <p class="cs-detail blue">other:</p>
        <p class="cs-detail">Linux, Docker, Ubuntu, Github, Git, Visual Studios Code</p>
        <p class="cs-detail blue">coursework:</p>
        <ul class="cs-coursework">
          <li>functional programming</li>
          <li>programming and design for the web</li>
          <li>object-oriented and data structures</li>
          <li>computer systems programming</li>
          <li>discrete structures</li>
        </ul>
      </div>
    </section>
    <section>
      <p class="cs-header green">//all of my CS projects:</p>
      <p class="cs-header green">//current ongoing projects</p>
      <p class="cs-proj-title dark-blue">
        <em>Personal Website</em>
      </p>
      <p class="cs-proj-title dark-blue">
        (HTML, CSS, PHP)
      </p>
      <p class="cs-proj-row cs-proj-col">
        This current website is a personal project of mine! Organized with HTML
        structuring and styling on CSS, I'm currently integrating server-side
        rendering with PHP and including other dynamic components.
      </p>
      <p class="cs-header green">//past projects</p>
      <div class="cs-projects">
        <p class="cs-proj-title dark-blue">
          <em>Handwriting Recognition System/Model with Multi-threading and Optimizations</em>
        </p>
        <p class="cs-proj-title dark-blue">
          (C++, Python, Linux)
        </p>
        <p class="cs-proj-row cs-proj-col">
          Developed in a Linux environment, this project involved a model that
          classified images of handwritten digits in a MNIST
          dataset, leveraging different search algorithms,
          data structures like Vector and Tree, and
          various optimizations. I worked with my great partner Kahyun Nam to
          create this project.
        </p>
        <div class="cs-proj-row">
          <div class="cs-proj-col">
            <p class="green">//description:</p>
            <p>
              This involved creating four supervised learning models that
              train and classify images of handwritten digits; HRSLinearSearch,
              HRSBinarySearch, HRSTreeSearch, and the alternative system (Parallel
              Linear Search) all rely on the generic resizable <code>Vector</code> and generic
              sort algorithm, class <code>Image</code>, and generic <code>Tree</code> data structure.
              HRSLinear, HRSBinary, and the alternative store a <code>Vector</code> as their set of
              training data and each use different implementations to classify the
              set of images passed in. HRSLinear uses a linear search algorithm
              and HRSBinary sorts then uses a binary search. The concurrent
              alternative system creates a thread for each partition of the
              training data then performs a linear search per partition.
              HRSTreeSearch stores the training data in a <code>Tree</code> and
              classifies an Image by using intensity to search and traverse
              through the tree and at a certain level determined by a K parameter, performs
              an exhaustive search using an image's distance to compare for that subtree.
            </p>
          </div>
          <div class="cs-proj-col">
            <p class="green">//results & analysis:</p>
            <p>
              Complexity analyses were done for training and classification times
              for HRSTree and the alternative; HRSTree had Nlog(N) and log(N)
              behavior for training and classification, while the alternative had
              N time complexity for training and N time complexity for classification.
              All models were quantitatively evaluated, in which each model trained
              on 60,000 images and classified 10,000, and a plot of the execution time
              vs accuracy was created for different values of K, visualizing how K’s
              value impacts accuracy along with performance. From the analysis,
              it was determined that there are various trade-offs between optimizing
              for time versus optimizing for accuracy.
            </p>
            <figure>
              <!-- Source: (original work) Tanya Zhou -->
              <img src="public/imgs/p1-data.png" alt="Data Analysis for CS project">
            </figure>
          </div>
        </div>
        <div class="cs-projects">
          <p class="cs-proj-title dark-blue">
            <em>Search-and-Retrieve Game using Hashmap and Dijkstra's Shortest Path Algorithm</em>
          </p>
          <p class="cs-proj-title dark-blue">
            (Java, JUnit, Java Swing)
          </p>
          <p class="cs-proj-row cs-proj-col">
            This project involved developing algorithms that drove a small search-and-retrieve
            type game, in which a character must first 'search' for a ring in a maze then upon
            retrieval, the character must return to the exit of the maze while collecting the
            maximum number of coins that they can. The algorithms that
            powered the character's movements were all tree-based algorithms and each
            relied on data structures to store information.
          </p>
          <div class="cs-proj-row">
            <div class="cs-proj-col">
              <p class="green">//description:</p>
              <p>
                This involved splitting the project up into two phases: a 'seek' phase
                and a 'scram' phase, where the character first must find the ring then
                run out of the maze. The 'seek' phase's problem mainly dealt with
                developing an algorithm that found the ring in the shortest number of
                steps in order to maximize the character's score; the more steps
                they took to find the ring meant a smaller score multiplier. Similarly,
                the "scram" phase required maximizing the number of coins collected while
                exiting and exiting within the prescribed number of steps.
                Each of these algorithms relied on a depth-first-search (DFS) algorithm
                and the "scram" phase implemented Dijkstra's algorithm once the character
                reached a threshold number of steps.
              </p>
            </div>
            <div class="cs-proj-col">
              <figure>
                <!-- Source: (original work) Tanya Zhou -->
                <img src="public/imgs/game-scram_ccexpress.png" alt="Image of Game">
              </figure>
            </div>

          </div>
          <div class="cs-projects">
            <p class="cs-proj-title dark-blue">
              <em>Software Replica of the Enigma Encryption Machine</em>
            </p>
            <p class="cs-proj-title dark-blue">
              (OCaml, Ubuntu, CMake)
            </p>
            <p class="cs-proj-row cs-proj-col">
              This project involved using OCaml and other
              functional programming techniques to replicate the Enigma from World War II.
              The project leveraged OCaml data types like variants and records and involved
              pattern matching to replicate the Enigma’s inner ciphering mechanisms such
              as the stepping of rotors, reflector, and its plugboard.
            </p>
            <div class="cs-proj-row">
              <div class="cs-proj-col">
                <figure>
                  <!-- Source: https://www.cs.cornell.edu/courses/cs3110/2022sp/a1/ -->
                  <img src="public/imgs/enigma.jpg" alt="Image of Enigma's Machinery">
                  Source: <cite><a class="cs-text" href="https://www.cs.cornell.edu/courses/cs3110/2022sp/a1/">CS3110 A1</a></cite>
                </figure>
              </div>

            </div>

    </section>
    </div>
    </div>
  </main>
  <?php include('includes/footer.php'); ?>
  <p class="green">page's design was inspired by the Visual Studio Code IDE</p>
</body>

</html>
