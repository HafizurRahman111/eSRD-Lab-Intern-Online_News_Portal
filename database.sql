
CREATE TABLE `user_activity` (
  `aid` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `pageurl` varchar(128) NOT NULL,
  `number_times` int(11) NOT NULL,
  `active_time` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `user_credential` (
  `user_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `uname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(64) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `user_infos` (
  `user_id` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `uname` varchar(128) NOT NULL,
  `designation` varchar(32) NOT NULL,
  `bdate` date NOT NULL,
  `address` varchar(128) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(16) NOT NULL,
  `utype` varchar(16) NOT NULL,
  `district` varchar(16) NOT NULL,
  `studentid` varchar(12) NOT NULL,
  `udate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `user_session` (
  `sid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `session_id` varchar(32) NOT NULL,
  `user_id` varchar(32) DEFAULT NULL,
  `ipaddress` varchar(15) NOT NULL,
  `os` varchar(32) NOT NULL,
  `browser` varchar(32) NOT NULL,
  `udate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `user_activity`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `user_credential`
--
ALTER TABLE `user_credential`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_session`
--
ALTER TABLE `user_session`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_activity`
--
ALTER TABLE `user_activity`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `user_credential`
--
ALTER TABLE `user_credential`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `user_session`
--
ALTER TABLE `user_session`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
