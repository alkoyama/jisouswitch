           function validateForm() {
            var itemA = document.getElementById("itemA").value;
            var itemB = document.getElementById("itemB").value;

            if (parseInt(itemA) <= 0 && parseInt(itemB) <= 0) {
                alert("おともだちをひとり以上選ばないと注文を送信できません。");
                return false;
            }

            return true;
            }
