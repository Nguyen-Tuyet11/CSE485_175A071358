<div class="col-md-10">
                <div class="panelSV">
                    <div class="panel-heading">
                        <h5>Điểm Sinh Viên</h5>
                        
                    </div>
                   
                   
                    <div class="table">
                        <?php

                                include('config.php');
                                $sql='SELECT ID,HoTen,Email,ChuyenMon,gioitinh FROM giangvien';
                                                            
                                $result= mysqli_query($conn,$sql);
                                echo "<table border='1' cellpadding='10'>";
                                echo "<tr>
                                <th><font color='Red'>Mã môn học</font></th>
                                <th><font color='Red'>Tên học phần</font></th>
                                <th><font color='Red'>Số TC</font></th>
                                <th><font color='Red'>Lần học</font></th>
                                <th><font color='Red'>Lần thi</font></th>
                                <th><font color='Red'>Đánh giá</font></th>
                                <th><font color='Red'>Mã sinh viên</font></th>
                                <th><font color='Red'>Qúa trình</font></th>
                                <th><font color='Red'>Thi</font></th>
                                <th><font color='Red'>TKHP</font></th>
                                <th><font color='Red'>Điểm chữ</font></th>
                                <th ><font color='Red'>Edit</font></th>
                                <th ><font color='Red'>Delete</font></th>
                               
                                </tr>";
                                if(mysqli_num_rows($result)>0)
                                {
                                while($row = mysqli_fetch_assoc( $result ))
                                {

                                echo "<tr>";
                                echo '<td><b><font color="#663300">' . $row['ID'] . '</font></b></td>';
                                echo '<td><b><font color="#663300">' . $row['HoTen'] . '</font></b></td>';
                                echo '<td><b><font color="#663300">' . $row['Email'] . '</font></b></td>';
                                echo '<td><b><font color="#663300">' . $row['ChuyenMon'] . '</font></b></td>';
                                echo '<td><b><font color="#663300">' . $row['gioitinh'] . '</font></b></td>';
                                echo '<td><b><font color="#663300"><a href="edit.php?id=' . $row['ID'] . '"><svg class="options rtl-flip" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="options"> <path d="M17.1330617,2.8594383 C15.9930617,1.7194383 14.0130617,1.7194383 12.8930617,2.8594383 L5.5130617,10.2394383 C5.3330617,10.4394383 5.3330617,10.7594383 5.5130617,10.9594383 C5.7130617,11.1394383 6.0330617,11.1394383 6.2330617,10.9594383 L13.5930617,3.5594383 C14.3530617,2.7994383 15.6730617,2.7994383 16.4130617,3.5594383 C17.1730617,4.3194383 17.1930617,5.5594383 16.4130617,6.3394383 L9.0330617,13.7594383 C8.7130617,14.0794383 8.9330617,14.6194383 9.3730617,14.6194383 C9.5130617,14.6194383 9.6330617,14.5594383 9.7330617,14.4594383 L17.1330617,7.0394383 C18.2930617,5.8794383 18.2930617,4.0194383 17.1330617,2.8594383 L17.1330617,2.8594383 Z M8.4930617,15.3594383 C8.0330617,13.4594383 6.5130617,11.9394383 4.6130617,11.4794383 C4.3530617,11.4194383 4.0930617,11.5794383 4.0130617,11.8194383 L2.0330617,17.3194383 C1.8730617,17.7194383 2.2730617,18.1194383 2.6730617,17.9594383 C8.6730617,15.7794383 8.2530617,15.9594383 8.3730617,15.8194383 C8.4930617,15.6994383 8.5330617,15.5194383 8.4930617,15.3594383 L8.4930617,15.3594383 Z M3.3330617,16.6594383 L4.8130617,12.5794383 C6.0130617,12.9994383 6.9730617,13.9794383 7.3930617,15.1794383 L3.3330617,16.6594383 Z" id="N"></path> </g> </g> </svg></a></font></b></td>';
                                echo '<td><b><font color="#663300"><a href="delete.php?id=' . $row['ID'] . '"><svg class="trash" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill-rule="evenodd"> <g id="trash"> <path d="M12,3.5 C12,2.4 11.1,1.5 10,1.5 C8.9,1.5 8,2.4 8,3.5 L5.5,3.5 C4.68,3.5 4,4.18 4,5 L4,7 C4,7.28 4.22,7.5 4.5,7.5 L15.5,7.5 C15.78,7.5 16,7.28 16,7 L16,5 C16,4.18 15.32,3.5 14.5,3.5 L12,3.5 Z M10,2.5 C10.56,2.5 11,2.94 11,3.5 L9,3.5 C9,2.94 9.44,2.5 10,2.5 L10,2.5 Z M15,6.5 L5,6.5 L5,5 C5,4.72 5.22,4.5 5.5,4.5 L14.5,4.5 C14.78,4.5 15,4.72 15,5 L15,6.5 Z M14.5,8.5 C14.22,8.5 14,8.72 14,9 L14,16 C14,16.28 13.78,16.5 13.5,16.5 L6.5,16.5 C6.22,16.5 6,16.28 6,16 L6,9 C6,8.72 5.78,8.5 5.5,8.5 C5.22,8.5 5,8.72 5,9 L5,16 C5,16.82 5.68,17.5 6.5,17.5 L13.5,17.5 C14.32,17.5 15,16.82 15,16 L15,9 C15,8.72 14.78,8.5 14.5,8.5 L14.5,8.5 Z M9,9 C9,8.72 8.78,8.5 8.5,8.5 C8.22,8.5 8,8.72 8,9 L8,15 C8,15.28 8.22,15.5 8.5,15.5 C8.78,15.5 9,15.28 9,15 L9,9 Z M12,9 C12,8.72 11.78,8.5 11.5,8.5 C11.22,8.5 11,8.72 11,9 L11,15 C11,15.28 11.22,15.5 11.5,15.5 C11.78,15.5 12,15.28 12,15 L12,9 Z" id="j"></path> </g> </g> </svg></a></font></b></td>';
                                echo "</tr>";

                                }
                                }

                                echo "</table>";

                        ?>
                    </div>
                </div>
</div>
                
            </div>
        </div>
    </div>
    </div>
</body>

</html>