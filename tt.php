
INSERT INTO `poster` (`id`, `name`, `img`, `rank`, `sh`, `ani`) VALUES (NULL, '預告片02', '03A02.jpg', '2', '1', '2');
INSERT INTO `poster` (`id`, `name`, `img`, `rank`, `sh`, `ani`) VALUES (NULL, '預告片03', '03A03.jpg', '3', '1', '3');
INSERT INTO `poster` (`id`, `name`, `img`, `rank`, `sh`, `ani`) VALUES (NULL, '預告片04', '03A04.jpg', '4', '1', '1');
INSERT INTO `poster` (`id`, `name`, `img`, `rank`, `sh`, `ani`) VALUES (NULL, '預告片05', '03A05.jpg', '5', '1', '2');
INSERT INTO `poster` (`id`, `name`, `img`, `rank`, `sh`, `ani`) VALUES (NULL, '預告片06', '03A06.jpg', '6', '1', '3');
INSERT INTO `poster` (`id`, `name`, `img`, `rank`, `sh`, `ani`) VALUES (NULL, '預告片07', '03A07.jpg', '7', '1', '1');
INSERT INTO `poster` (`id`, `name`, `img`, `rank`, `sh`, `ani`) VALUES (NULL, '預告片08', '03A08.jpg', '8', '1', '2');
INSERT INTO `poster` (`id`, `name`, `img`, `rank`, `sh`, `ani`) VALUES (NULL, '預告片09', '03A09.jpg', '9', '1', '3');



INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`,`intro`, `sh`, `rank`) VALUES (NULL, '院線片02', '1', '90', '2020-08-07', '院線片02出版商', '院線片02導演', '03B02v.mp4', '03B02.png','院線片02劇情介紹院線片02劇情介紹院線片02劇情介紹院線片02劇情介紹院線片02劇情介紹', '1', '2');
INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`,`intro`, `sh`, `rank`) VALUES (NULL, '院線片03', '1', '90', '2020-08-08', '院線片03出版商', '院線片03導演', '03B03v.mp4', '03B03.png','院線片03劇情介紹院線片03劇情介紹院線片03劇情介紹院線片03劇情介紹院線片03劇情介紹', '1', '3');
INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`,`intro`, `sh`, `rank`) VALUES (NULL, '院線片04', '1', '90', '2020-08-09', '院線片04出版商', '院線片04導演', '03B04v.mp4', '03B04.png','院線片04劇情介紹院線片04劇情介紹院線片04劇情介紹院線片04劇情介紹院線片04劇情介紹', '1', '4');
INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`,`intro`, `sh`, `rank`) VALUES (NULL, '院線片05', '1', '90', '2020-08-10', '院線片05出版商', '院線片05導演', '03B05v.mp4', '03B05.png','院線片05劇情介紹院線片05劇情介紹院線片05劇情介紹院線片05劇情介紹院線片05劇情介紹', '1', '5');
INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`,`intro`, `sh`, `rank`) VALUES (NULL, '院線片06', '1', '90', '2020-08-07', '院線片06出版商', '院線片06導演', '03B06v.mp4', '03B06.png','院線片06劇情介紹院線片06劇情介紹院線片06劇情介紹院線片06劇情介紹院線片06劇情介紹', '1', '6');
INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`,`intro`, `sh`, `rank`) VALUES (NULL, '院線片07', '1', '90', '2020-08-08', '院線片07出版商', '院線片07導演', '03B07v.mp4', '03B07.png','院線片07劇情介紹院線片07劇情介紹院線片07劇情介紹院線片07劇情介紹院線片07劇情介紹', '1', '7');
INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`,`intro`, `sh`, `rank`) VALUES (NULL, '院線片08', '1', '90', '2020-08-09', '院線片08出版商', '院線片08導演', '03B08v.mp4', '03B08.png','院線片08劇情介紹院線片08劇情介紹院線片08劇情介紹院線片08劇情介紹院線片08劇情介紹', '1', '8');
INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`,`intro`, `sh`, `rank`) VALUES (NULL, '院線片09', '1', '90', '2020-08-10', '院線片09出版商', '院線片09導演', '03B09v.mp4', '03B09.png','院線片09劇情介紹院線片09劇情介紹院線片09劇情介紹院線片09劇情介紹院線片09劇情介紹', '1', '9');


<br>
<br>
INSERT INTO `ord` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202008250001', '院線片01', '2020-08-25', '14:00~16:00', '3', '<?=serialize([1,2,3]);?>');
INSERT INTO `ord` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202008250002', '院線片02', '2020-08-26', '16:00~18:00', '3', '<?=serialize([4,5,6]);?>');
INSERT INTO `ord` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202008250003', '院線片03', '2020-08-27', '18:00~20:00', '3', '<?=serialize([7,8,9]);?>');
INSERT INTO `ord` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202008250004', '院線片04', '2020-08-25', '14:00~16:00', '3', '<?=serialize([1,2]);?>');
INSERT INTO `ord` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES (NULL, '202008250005', '院線片05', '2020-08-26', '20:00~22:00', '3', '<?=serialize([2,3]);?>');