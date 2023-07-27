import React, { useEffect, useState } from 'react';
import Table from 'react-bootstrap/Table';
import { Link } from 'react-router-dom';
import { getSubscribers } from '../../services/BlogRepository';
import Loading from '../../components/Loading';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faPencil, faTrash } from '@fortawesome/free-solid-svg-icons';

export default function Subscribers() {
    const [subscriber, setSubscribersList] = useState([]),
        [isVisibleLoading, setIsVisibleLoading] = useState(true);


    useEffect(() => {
        document.title = 'Danh sách đăng ký theo dõi';

        getSubscribers().then(data => {
            console.log("data:")
            console.log(data)
            if (data)
                setSubscribersList(data);
            else
                setSubscribersList([]);
            setIsVisibleLoading(false);
        });
    }, []);

    return (
        <>
            <h1>Danh sách đăng ký theo dõi </h1>
            {isVisibleLoading ? <Loading /> :
                <Table striped responsive bordered>
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Ngày đăng ký</th>
                            <th>Ngày huỷ đăng ký</th>
                            <th>Lý do</th>
                            <th>Ghi chú</th>
                        </tr>
                    </thead>
                    <tbody>
                        {subscriber.length > 0 ? subscriber.map((items, index) =>
                            <tr key={index}>
                                <td>
                                    {items.email}
                                </td>
                                <td>{items.subscribedDate}</td>
                                <td>{items.unsubscribedDate}</td>
                                <td>{items.reasons}</td>
                                <td>{items.notes}</td>
                            </tr>
                        ) :
                            <tr>
                                <td colSpan={4}>
                                    <h4 className='text-danger text-center'>Không tìm thấy bài viết nào</h4>
                                </td>
                            </tr>}
                    </tbody>
                </Table>
            }
        </>
    );
}

