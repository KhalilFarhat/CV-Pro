const questions = document.querySelectorAll('.question');
questions.forEach(question => {
  const arrow = question.querySelector('img');
  question.addEventListener('click', () => {
    const answer = question.nextElementSibling;
    if (answer.style.display === 'block') {
      answer.style.display = 'none';
      arrow.setAttribute('src', 'resources/images/double-arrow-down.png');
    } else {
      answer.style.display = 'block';
      arrow.setAttribute('src', 'resources/images/double-arrow-up.png');
    }
  });
});


