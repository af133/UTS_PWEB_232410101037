function filterCategory(){
        
    const categorySelect = document.getElementById('category').value;
    if (categorySelect === 'all') {
        document.getElementById('drink').classList.remove('hidden');
        document.getElementById('food').classList.remove('hidden');
        document.getElementById('snack').classList.remove('hidden');
    }
    else if(categorySelect === 'Drink') {
        document.getElementById('food').classList.add('hidden');
        document.getElementById('snack').classList.add('hidden');
        document.getElementById('drink').classList.remove('hidden');
    }
    else if(categorySelect === 'Food') {
        document.getElementById('snack').classList.add('hidden');
        document.getElementById('drink').classList.add('hidden');
        document.getElementById('food').classList.remove('hidden');
    }
    else if(categorySelect === 'Snack') {
        document.getElementById('drink').classList.add('hidden');
        document.getElementById('food').classList.add('hidden');
        document.getElementById('snack').classList.remove('hidden');
    }
}
window.addEventListener('DOMContentLoaded', () => {
    filterCategory(); 
    document.getElementById('category').addEventListener('change', filterCategory);
});


